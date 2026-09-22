<?php

namespace Tests\Feature;

use Tests\TestCase;

class DuplicateContentSeoTest extends TestCase
{
    public function test_blog_page_one_query_redirects_to_canonical_index(): void
    {
        $this->get('/blog?page=1')
            ->assertRedirect(route('blog.index'))
            ->assertStatus(301);
    }

    public function test_projects_list_redirects_to_projects(): void
    {
        $this->get(route('projects-list'))
            ->assertRedirect(route('projects'))
            ->assertStatus(301);
    }

    public function test_projects_page_includes_canonical(): void
    {
        $this->get(route('projects'))
            ->assertOk()
            ->assertSee('<link rel="canonical" href="'.route('projects').'">', false)
            ->assertDontSee(route('projects-list'), false);
    }
}
