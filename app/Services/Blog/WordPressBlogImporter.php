<?php

namespace App\Services\Blog;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use DOMDocument;
use DOMElement;
use DOMXPath;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RuntimeException;
use SimpleXMLElement;

class WordPressBlogImporter
{
    /** @var array<string, string> */
    private array $urlMap = [];

    private int $imported = 0;

    private int $updated = 0;

    private int $skipped = 0;

    private int $imagesDownloaded = 0;

    /** @var list<string> */
    private array $errors = [];

    /**
     * @return array{
     *     imported: int,
     *     updated: int,
     *     skipped: int,
     *     images_downloaded: int,
     *     errors: list<string>
     * }
     */
    public function import(string $xmlPath, bool $downloadImages = true): array
    {
        if (! is_file($xmlPath)) {
            throw new RuntimeException("WordPress export not found: {$xmlPath}");
        }

        $previous = libxml_use_internal_errors(true);
        $xml = simplexml_load_file($xmlPath, SimpleXMLElement::class, LIBXML_NOCDATA);
        libxml_clear_errors();
        libxml_use_internal_errors($previous);

        if ($xml === false) {
            throw new RuntimeException('Unable to parse WordPress export XML.');
        }

        $xml->registerXPathNamespace('wp', 'http://wordpress.org/export/1.2/');
        $xml->registerXPathNamespace('content', 'http://purl.org/rss/1.0/modules/content/');
        $xml->registerXPathNamespace('excerpt', 'http://wordpress.org/export/1.2/excerpt/');
        $xml->registerXPathNamespace('dc', 'http://purl.org/dc/elements/1.1/');

        $items = $xml->channel->item ?? [];

        if ($downloadImages) {
            $this->prefetchAttachmentImages($items);
        }

        foreach ($items as $item) {
            $postType = (string) ($item->children('wp', true)->post_type ?? '');
            $status = (string) ($item->children('wp', true)->status ?? '');

            if ($postType !== 'post' || $status !== 'publish') {
                continue;
            }

            try {
                $this->importPost($item, $downloadImages);
            } catch (\Throwable $exception) {
                $title = (string) ($item->title ?? 'untitled');
                $this->errors[] = "Failed importing [{$title}]: {$exception->getMessage()}";
                $this->skipped++;
            }
        }

        return [
            'imported' => $this->imported,
            'updated' => $this->updated,
            'skipped' => $this->skipped,
            'images_downloaded' => $this->imagesDownloaded,
            'errors' => $this->errors,
        ];
    }

    private function prefetchAttachmentImages(iterable $items): void
    {
        foreach ($items as $item) {
            $postType = (string) ($item->children('wp', true)->post_type ?? '');
            if ($postType !== 'attachment') {
                continue;
            }

            $url = (string) ($item->children('wp', true)->attachment_url ?? '');
            if ($url === '' || ! $this->isImageUrl($url)) {
                continue;
            }

            $this->downloadImage($url);
        }
    }

    private function importPost(SimpleXMLElement $item, bool $downloadImages): void
    {
        $wp = $item->children('wp', true);
        $contentNs = $item->children('content', true);
        $excerptNs = $item->children('excerpt', true);

        $wordpressId = (int) ($wp->post_id ?? 0);
        $title = trim((string) ($item->title ?? ''));
        $slug = trim((string) ($wp->post_name ?? ''));
        $content = (string) ($contentNs->encoded ?? '');
        $excerpt = trim((string) ($excerptNs->encoded ?? ''));
        $publishedAt = trim((string) ($wp->post_date ?? ''));

        if ($title === '') {
            $this->skipped++;

            return;
        }

        if ($slug === '') {
            $slug = Str::slug($title);
        }

        $content = $this->sanitizeImportedHtml($content);

        if ($downloadImages) {
            $content = $this->localizeContentImages($content);
        }

        $featuredImage = $this->extractFirstLocalImagePath($content);

        $post = BlogPost::query()->where('wordpress_id', $wordpressId)->first();
        $isUpdate = $post !== null;

        if (! $post) {
            $post = new BlogPost;
            $post->wordpress_id = $wordpressId > 0 ? $wordpressId : null;
        }

        $post->fill([
            'title' => $title,
            'slug' => $isUpdate ? $post->slug : BlogPost::uniqueSlug($slug, $post->id),
            'excerpt' => $excerpt !== '' ? $excerpt : Str::limit(trim(strip_tags($content)), 220),
            'content' => $content,
            'featured_image' => $featuredImage ?? $post->featured_image,
            'meta_title' => $title,
            'meta_description' => $excerpt !== '' ? Str::limit(strip_tags($excerpt), 160) : Str::limit(trim(strip_tags($content)), 160),
            'status' => BlogPost::STATUS_PUBLISHED,
            'published_at' => $publishedAt !== '' ? $publishedAt : now(),
        ]);

        $post->save();

        $categoryIds = $this->syncCategories($item);
        $tagIds = $this->syncTags($item);

        $post->categories()->sync($categoryIds);
        $post->tags()->sync($tagIds);

        if ($isUpdate) {
            $this->updated++;
        } else {
            $this->imported++;
        }
    }

    /**
     * @return list<int>
     */
    private function syncCategories(SimpleXMLElement $item): array
    {
        $ids = [];

        foreach ($item->category ?? [] as $category) {
            $domain = (string) ($category['domain'] ?? '');
            $name = trim((string) $category);
            $nicename = trim((string) ($category['nicename'] ?? ''));

            if ($domain !== 'category' || $name === '' || strcasecmp($name, 'Uncategorized') === 0) {
                continue;
            }

            $slugBase = $nicename !== '' ? Str::slug($nicename) : Str::slug($name);
            $model = BlogCategory::query()
                ->where(function ($query) use ($name, $slugBase): void {
                    $query->where('name', $name)->orWhere('slug', $slugBase);
                })
                ->first();

            if (! $model) {
                $model = BlogCategory::query()->create([
                    'name' => $name,
                    'slug' => BlogCategory::uniqueSlug($slugBase),
                ]);
            }

            $ids[] = $model->id;
        }

        return array_values(array_unique($ids));
    }

    /**
     * @return list<int>
     */
    private function syncTags(SimpleXMLElement $item): array
    {
        $ids = [];

        foreach ($item->category ?? [] as $category) {
            $domain = (string) ($category['domain'] ?? '');
            $name = trim((string) $category);
            $nicename = trim((string) ($category['nicename'] ?? ''));

            if ($domain !== 'post_tag' || $name === '') {
                continue;
            }

            $slugBase = $nicename !== '' ? Str::slug($nicename) : Str::slug($name);
            $model = BlogTag::query()
                ->where(function ($query) use ($name, $slugBase): void {
                    $query->where('name', $name)->orWhere('slug', $slugBase);
                })
                ->first();

            if (! $model) {
                $model = BlogTag::query()->create([
                    'name' => $name,
                    'slug' => BlogTag::uniqueSlug($slugBase),
                ]);
            }

            $ids[] = $model->id;
        }

        return array_values(array_unique($ids));
    }

    private function sanitizeImportedHtml(string $html): string
    {
        $html = preg_replace('#<script\b[^>]*>.*?</script>#is', '', $html) ?? $html;
        $html = preg_replace('#<style\b[^>]*>.*?</style>#is', '', $html) ?? $html;

        return trim($html);
    }

    private function localizeContentImages(string $html): string
    {
        if (trim($html) === '') {
            return $html;
        }

        $urls = $this->extractImageUrlsFromHtml($html);

        foreach ($urls as $url) {
            if (! str_contains($url, 'spheremarketingsolutions.com') && ! str_contains($url, 'wp-content/uploads')) {
                continue;
            }

            $this->downloadImage($url);
        }

        if ($this->urlMap === []) {
            return $html;
        }

        // Longest URLs first so sized variants rewrite correctly.
        $map = $this->urlMap;
        uksort($map, fn (string $a, string $b): int => strlen($b) <=> strlen($a));

        foreach ($map as $remote => $localUrl) {
            $html = str_replace($remote, $localUrl, $html);
        }

        return $this->stripWordpressSrcset($html);
    }

    /**
     * @return list<string>
     */
    private function extractImageUrlsFromHtml(string $html): array
    {
        $urls = [];

        if (preg_match_all('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $matches)) {
            $urls = array_merge($urls, $matches[1]);
        }

        if (preg_match_all('/srcset=["\']([^"\']+)["\']/i', $html, $srcsetMatches)) {
            foreach ($srcsetMatches[1] as $srcset) {
                foreach (explode(',', $srcset) as $candidate) {
                    $part = trim(explode(' ', trim($candidate))[0] ?? '');
                    if ($part !== '') {
                        $urls[] = $part;
                    }
                }
            }
        }

        return array_values(array_unique($urls));
    }

    private function stripWordpressSrcset(string $html): string
    {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $internal = libxml_use_internal_errors(true);
        $wrapped = '<?xml encoding="UTF-8"><div id="wp-import-root">'.$html.'</div>';
        $dom->loadHTML($wrapped, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        libxml_use_internal_errors($internal);

        $xpath = new DOMXPath($dom);
        /** @var DOMElement $img */
        foreach ($xpath->query('//img') ?: [] as $img) {
            $img->removeAttribute('srcset');
            $img->removeAttribute('sizes');
        }

        $root = $dom->getElementById('wp-import-root');
        if (! $root) {
            return $html;
        }

        $output = '';
        foreach ($root->childNodes as $child) {
            $output .= $dom->saveHTML($child);
        }

        return $output;
    }

    private function downloadImage(string $url): ?string
    {
        $url = html_entity_decode($url, ENT_QUOTES | ENT_HTML5);

        if (isset($this->urlMap[$url])) {
            return $this->urlMap[$url];
        }

        if (! $this->isImageUrl($url)) {
            return null;
        }

        $path = parse_url($url, PHP_URL_PATH) ?: '';
        $basename = basename($path);
        if ($basename === '' || $basename === '/' || ! str_contains($basename, '.')) {
            $basename = Str::random(16).'.jpg';
        }

        $year = date('Y');
        $month = date('m');
        if (preg_match('#/uploads/(\d{4})/(\d{2})/#', $path, $matches)) {
            $year = $matches[1];
            $month = $matches[2];
        }

        $storagePath = "blogs/{$year}/{$month}/{$basename}";
        $localUrl = '/storage/'.$storagePath;

        if (Storage::disk('public')->exists($storagePath)) {
            $this->urlMap[$url] = $localUrl;

            return $localUrl;
        }

        try {
            $response = Http::timeout(30)
                ->withHeaders(['User-Agent' => 'SphereBlogImporter/1.0'])
                ->get($url);

            if (! $response->successful()) {
                $this->errors[] = "Failed to download image ({$response->status()}): {$url}";

                return null;
            }

            if (! str_contains($basename, '.')) {
                $extension = $this->guessExtension($url, $response->header('Content-Type'));
                $basename = Str::random(16).'.'.$extension;
                $storagePath = "blogs/{$year}/{$month}/{$basename}";
                $localUrl = '/storage/'.$storagePath;
            }

            Storage::disk('public')->put($storagePath, $response->body());
            $this->imagesDownloaded++;
            $this->urlMap[$url] = $localUrl;

            return $localUrl;
        } catch (\Throwable $exception) {
            $this->errors[] = "Image download error [{$url}]: {$exception->getMessage()}";

            return null;
        }
    }

    private function extractFirstLocalImagePath(string $html): ?string
    {
        if (! preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $matches)) {
            return null;
        }

        $src = $matches[1];

        if (preg_match('#/storage/(.+)$#', $src, $pathMatch)) {
            return ltrim($pathMatch[1], '/');
        }

        foreach ($this->urlMap as $remote => $local) {
            if ($local === $src || $remote === $src) {
                if (preg_match('#/storage/(.+)$#', $local, $pathMatch)) {
                    return ltrim($pathMatch[1], '/');
                }
            }
        }

        return null;
    }

    private function isImageUrl(string $url): bool
    {
        $path = strtolower((string) parse_url($url, PHP_URL_PATH));

        return (bool) preg_match('/\.(jpe?g|png|gif|webp|avif|svg)$/', $path);
    }

    private function guessExtension(string $url, ?string $contentType): string
    {
        $path = strtolower((string) parse_url($url, PHP_URL_PATH));
        if (preg_match('/\.(jpe?g|png|gif|webp|avif|svg)$/', $path, $matches)) {
            return $matches[1] === 'jpeg' ? 'jpg' : $matches[1];
        }

        return match ($contentType) {
            'image/jpeg' => 'jpg',
            'image/png' => 'png',
            'image/webp' => 'webp',
            'image/avif' => 'avif',
            'image/gif' => 'gif',
            'image/svg+xml' => 'svg',
            default => 'jpg',
        };
    }
}
