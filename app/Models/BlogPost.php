<?php

namespace App\Models;

use Filament\Forms\Components\RichEditor\Models\Concerns\InteractsWithRichContent;
use Filament\Forms\Components\RichEditor\Models\Contracts\HasRichContent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPost extends Model implements HasRichContent
{
    use InteractsWithRichContent;

    public const STATUS_DRAFT = 'draft';

    public const STATUS_PUBLISHED = 'published';

    protected $fillable = [
        'wordpress_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'meta_title',
        'meta_description',
        'status',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'wordpress_id' => 'integer',
        ];
    }

    protected function setUpRichContent(): void
    {
        $this->registerRichContent('content')
            ->fileAttachmentsDisk('public');
    }

    protected static function booted(): void
    {
        static::saving(function (BlogPost $post): void {
            if (blank($post->slug) && filled($post->title)) {
                $post->slug = static::uniqueSlug(Str::slug($post->title), $post->id);
            }

            if ($post->status === self::STATUS_PUBLISHED && blank($post->published_at)) {
                $post->published_at = now();
            }
        });
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_category_post');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(BlogTag::class, 'blog_post_tag');
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query
            ->where('status', self::STATUS_PUBLISHED)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function featuredImageUrl(): string
    {
        if (blank($this->featured_image)) {
            return asset('images/blog-default.jpg');
        }

        if (str_starts_with($this->featured_image, 'http://') || str_starts_with($this->featured_image, 'https://')) {
            return $this->featured_image;
        }

        if (str_starts_with($this->featured_image, 'images/')) {
            return asset($this->featured_image);
        }

        return Storage::disk('public')->url($this->featured_image);
    }

    public function hasCustomFeaturedImage(): bool
    {
        return filled($this->featured_image);
    }

    public function contentHtml(): string
    {
        $content = (string) ($this->content ?? '');

        if ($content === '') {
            return '';
        }

        // TipTap rendering is ideal for editor-authored content; fall back to stored HTML
        // so WordPress imports with complex markup still display correctly.
        try {
            $rendered = $this->renderRichContent('content');

            if (filled($rendered) && str_contains($rendered, '<img') === str_contains($content, '<img')) {
                return $rendered;
            }
        } catch (\Throwable) {
            // Use stored HTML below.
        }

        return $content;
    }

    public static function uniqueSlug(string $base, ?int $ignoreId = null): string
    {
        $slug = $base !== '' ? $base : 'post';
        $original = $slug;
        $counter = 1;

        while (static::query()
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->where('slug', $slug)
            ->exists()) {
            $slug = $original.'-'.$counter;
            $counter++;
        }

        return $slug;
    }
}
