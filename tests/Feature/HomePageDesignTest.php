<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageDesignTest extends TestCase
{
    public function test_home_page_shows_sphere_branding(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Sphere Marketing Solutions', false)
            ->assertDontSee('GrowMark', false)
            ->assertSee('Our Services', false);
    }
}
