<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageDesignTest extends TestCase
{
    public function test_home_page_shows_simplified_hero_and_sphere_branding(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Sphere Marketing Solutions', false)
            ->assertDontSee('GrowMark', false)
            ->assertSee('Get a Quote', false)
            ->assertSee('Our Services', false)
            ->assertSee('A simple path from idea to launch', false)
            ->assertSee('E-commerce Website Build', false)
            ->assertDontSee('Erat ipsum justo amet duo', false);
    }

    public function test_header_drops_marquee_and_keeps_core_links(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertDontSee('WEB & MOBILE ENGINEERING', false)
            ->assertDontSee('<marquee', false)
            ->assertSee(route('prices'), false)
            ->assertSee(route('contact'), false)
            ->assertSee(route('our-team'), false)
            ->assertSee(route('faqs'), false);
    }
}
