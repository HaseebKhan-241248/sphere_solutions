<?php

namespace Database\Seeders;

use App\Models\ServiceItem;
use App\Models\ServicePage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        ServicePage::query()->updateOrCreate(['id' => 1], [
            'hero_image' => 'images/about-hero.jpg',
            'hero_heading' => 'Service',
            'services_tagline' => 'Our Services',
            'services_heading' => 'Services That Help Your Business Grow',
            'contact_tagline' => 'Contact Us',
            'contact_heading' => 'Need Our Expert Help? We\'re Here!',
            'contact_paragraph_1' => 'Tell us what you need — a new website, more leads, better SEO, or ongoing creative support. We\'ll review your goals and suggest a clear next step.',
            'contact_paragraph_2' => 'Most conversations start with a short call or message. You\'ll hear back within one business day.',
        ]);

        $data = require __DIR__.'/data/service_items.php';
        $defaultFaqs = $data['default_faqs'];
        $defaultImage = 'images/about-hero.jpg';

        foreach ($data['items'] as $item) {
            $slug = Str::slug($item['title']);
            $faqs = ($item['faqs'] ?? []) === 'default' ? $defaultFaqs : ($item['faqs'] ?? $defaultFaqs);

            ServiceItem::query()->updateOrCreate(['slug' => $slug], [
                ...$item,
                'slug' => $slug,
                'link_text' => 'Read More',
                'link_url' => null,
                'detail_hero_image' => $defaultImage,
                'detail_image' => $defaultImage,
                'faqs' => $faqs,
                'is_active' => true,
            ]);
        }
    }
}
