<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::query()->updateOrCreate(
            ['id' => 1],
            [
                'hero_image' => 'images/about-hero.jpg',
                'hero_heading' => 'About Us',
                'features_tagline' => 'Features',
                'features_heading' => 'Why People Choose Us!',
                'features' => [
                    [
                        'icon' => 'images/icon-1.png',
                        'title' => 'Web Development',
                        'description' => 'Visually appealing, functionally robust websites built for your business goals.',
                    ],
                    [
                        'icon' => 'images/icon-2.png',
                        'title' => 'Digital Marketing',
                        'description' => 'Social ads, SEO, and campaigns that reach your audience and drive conversions.',
                    ],
                    [
                        'icon' => 'images/icon-3.png',
                        'title' => 'Creative Content',
                        'description' => 'Video editing and graphic design that elevate your brand image and content.',
                    ],
                    [
                        'icon' => 'images/icon-4.png',
                        'title' => 'Quick Support',
                        'description' => 'Our team is available Monday to Saturday to help with services and pricing.',
                    ],
                ],
                'about_image' => 'images/about-play.jpg',
                'about_tagline' => 'About Us',
                'about_heading' => 'The Best Marketing Agency to Improve Your Businesses',
                'about_description' => 'Welcome to Sphere Marketing Solutions. We specialize in web development, social media advertising, SEO, video editing, graphic design, and YouTube channel management to enhance your online presence and achieve your business goals.',
                'about_highlights' => [
                    [
                        'icon' => 'images/icon-5.png',
                        'title' => 'Client-First Ethics',
                        'description' => 'We prioritize client success, ethical services, and maximizing ROI.',
                    ],
                    [
                        'icon' => 'images/icon-2.png',
                        'title' => 'Dedicated Experts',
                        'description' => 'A tightly-knit team focused on innovation and results-driven delivery.',
                    ],
                ],
                'about_cta_text' => 'Contact Us',
                'about_cta_url' => '/contact-us',
            ],
        );
    }
}
