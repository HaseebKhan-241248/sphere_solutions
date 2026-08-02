<?php

namespace Tests\Feature;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\User;
use App\Services\Blog\WordPressBlogImporter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BlogModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_published_blog_index_and_show_pages_work(): void
    {
        $post = BlogPost::query()->create([
            'title' => 'Public Blog Post',
            'slug' => 'public-blog-post',
            'excerpt' => 'A short excerpt',
            'content' => '<h1>Hello</h1><p>Body copy</p>',
            'status' => BlogPost::STATUS_PUBLISHED,
            'published_at' => now()->subDay(),
        ]);

        BlogPost::query()->create([
            'title' => 'Draft Post',
            'slug' => 'draft-post',
            'content' => '<p>Hidden</p>',
            'status' => BlogPost::STATUS_DRAFT,
            'published_at' => null,
        ]);

        $this->get(route('blog.index'))
            ->assertOk()
            ->assertSee('Public Blog Post')
            ->assertDontSee('Draft Post');

        $this->get(route('blog.show', $post->slug))
            ->assertOk()
            ->assertSee('Public Blog Post')
            ->assertSee('Hello')
            ->assertSee('Body copy');

        $this->get(route('blog.show', 'draft-post'))
            ->assertNotFound();
    }

    public function test_admin_can_open_blog_resources(): void
    {
        $admin = User::factory()->create();

        $post = BlogPost::query()->create([
            'title' => 'Admin Post',
            'slug' => 'admin-post',
            'content' => '<p>Admin</p>',
            'status' => BlogPost::STATUS_PUBLISHED,
            'published_at' => now(),
        ]);

        BlogCategory::query()->create([
            'name' => 'Marketing',
            'slug' => 'marketing',
        ]);

        BlogTag::query()->create([
            'name' => 'SEO',
            'slug' => 'seo',
        ]);

        $this->actingAs($admin)
            ->get('/admin/blog-posts')
            ->assertOk()
            ->assertSee('Admin Post');

        $this->actingAs($admin)
            ->get('/admin/blog-categories')
            ->assertOk()
            ->assertSee('Marketing');

        $this->actingAs($admin)
            ->get('/admin/blog-tags')
            ->assertOk()
            ->assertSee('SEO');

        $this->actingAs($admin)
            ->get('/admin/blog-posts/'.$post->id.'/edit')
            ->assertOk();
    }

    public function test_wordpress_importer_imports_published_posts_and_images(): void
    {
        Storage::fake('public');

        Http::fake([
            'https://example.com/wp-content/uploads/2024/08/demo.png' => Http::response('fake-image-bytes', 200, [
                'Content-Type' => 'image/png',
            ]),
        ]);

        $xmlPath = storage_path('framework/testing/wordpress-sample.xml');
        if (! is_dir(dirname($xmlPath))) {
            mkdir(dirname($xmlPath), 0777, true);
        }

        file_put_contents($xmlPath, $this->sampleWxr());

        $result = app(WordPressBlogImporter::class)->import($xmlPath, downloadImages: true);

        $this->assertSame(1, $result['imported']);
        $this->assertSame(0, $result['skipped']);
        $this->assertGreaterThanOrEqual(1, $result['images_downloaded']);

        $post = BlogPost::query()->where('slug', 'sample-imported-post')->first();
        $this->assertNotNull($post);
        $this->assertSame(BlogPost::STATUS_PUBLISHED, $post->status);
        $this->assertStringContainsString('/storage/blogs/2024/08/demo.png', $post->content);
        $this->assertStringNotContainsString('http://', $post->content);
        $this->assertSame('blogs/2024/08/demo.png', $post->featured_image);
        $this->assertTrue($post->categories->contains('slug', 'digital-marketing'));
        $this->assertTrue($post->tags->contains('slug', 'seo-tips'));
        Storage::disk('public')->assertExists('blogs/2024/08/demo.png');
    }

    private function sampleWxr(): string
    {
        return <<<'XML'
<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0"
    xmlns:excerpt="http://wordpress.org/export/1.2/excerpt/"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:wfw="http://wellformedweb.org/CommentAPI/"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:wp="http://wordpress.org/export/1.2/">
<channel>
    <title>Sample</title>
    <item>
        <title>Attachment</title>
        <wp:post_id>10</wp:post_id>
        <wp:post_type><![CDATA[attachment]]></wp:post_type>
        <wp:status><![CDATA[inherit]]></wp:status>
        <wp:attachment_url><![CDATA[https://example.com/wp-content/uploads/2024/08/demo.png]]></wp:attachment_url>
    </item>
    <item>
        <title>Sample Imported Post</title>
        <link>https://example.com/sample-imported-post/</link>
        <category domain="category" nicename="digital-marketing"><![CDATA[Digital Marketing]]></category>
        <category domain="category" nicename="uncategorized"><![CDATA[Uncategorized]]></category>
        <category domain="post_tag" nicename="seo-tips"><![CDATA[SEO Tips]]></category>
        <content:encoded><![CDATA[<style>.x{color:red}</style><h2>Heading</h2><p>Hello world</p><img src="https://example.com/wp-content/uploads/2024/08/demo.png" alt="Demo" />]]></content:encoded>
        <excerpt:encoded><![CDATA[]]></excerpt:encoded>
        <wp:post_id>20</wp:post_id>
        <wp:post_date><![CDATA[2024-08-01 10:00:00]]></wp:post_date>
        <wp:post_name><![CDATA[sample-imported-post]]></wp:post_name>
        <wp:status><![CDATA[publish]]></wp:status>
        <wp:post_type><![CDATA[post]]></wp:post_type>
    </item>
    <item>
        <title>Draft Should Skip</title>
        <content:encoded><![CDATA[<p>Draft</p>]]></content:encoded>
        <wp:post_id>21</wp:post_id>
        <wp:post_date><![CDATA[2024-08-02 10:00:00]]></wp:post_date>
        <wp:post_name><![CDATA[draft-should-skip]]></wp:post_name>
        <wp:status><![CDATA[draft]]></wp:status>
        <wp:post_type><![CDATA[post]]></wp:post_type>
    </item>
</channel>
</rss>
XML;
    }
}
