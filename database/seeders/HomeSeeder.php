<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::query()->updateOrCreate(
            ['id' => 1],
            [
                'hero_video' => 'videos/hero-video-1.mp4',
                'hero_tagline' => 'Sphere Marketing Solutions',
                'hero_heading' => 'Get your business seen by the right people',
                'hero_subheading' => 'We bring strategy, creativity, and digital expertise together to help businesses build their brand and reach the people who matter most',
                'hero_primary_cta_text' => 'Grow With Us',
                'hero_primary_cta_url' => '/contact-us',
                'hero_secondary_cta_text' => 'Explore Our Services',
                'hero_secondary_cta_url' => '/services',
                'benefits_heading' => 'Everything your business needs to grow online',
                'benefits' => [
                    [
                        'icon' => 'images/icon-1.png',
                        'title' => 'Built Your Website',
                        'description' => 'Visually appealing, functionally robust websites built for your business goals.',
                    ],
                    [
                        'icon' => 'images/icon-2.png',
                        'title' => 'Reach More Customer',
                        'description' => 'Get your business in front of the right people through Google, social media, and online advertising.',
                    ],
                    [
                        'icon' => 'images/icon-3.png',
                        'title' => 'Creative Content',
                        'description' => 'Video editing and graphic design that elevate your brand image and content.',
                    ],
                    [
                        'icon' => 'images/icon-4.png',
                        'title' => 'Quick Support',
                        'description' => 'We\'re here when you need updates, improvements, or help with your digital presence',
                    ],
                ],
                'about_image' => 'images/about-play.jpg',
                'about_tagline' => 'About Us',
                'about_heading' => 'Marketing Solutions Built for Business Growth',
                'about_description' => 'Welcome to Sphere Marketing Solutions. We specialize in web development, social media advertising, SEO, video editing, graphic design, and YouTube channel management to enhance your online presence and achieve your business goals.',
                'about_features' => [
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
                'contact_tagline' => 'Contact Us',
                'contact_heading' => 'Ready to Grow Your Business?',
                'contact_paragraph_1' => 'Tell us what you need — a new website, more leads, better SEO, or ongoing creative support. We’ll review your goals and suggest a clear next step.',
                'contact_paragraph_2' => 'Most conversations start with a short call or message. You’ll hear back within one business day.',
            ],
        );
    }
}
