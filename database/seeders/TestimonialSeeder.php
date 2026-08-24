<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'R. Marcus',
                'role' => 'Director of Hot Prana Academy',
                'quote' => 'Sphere helped us improve our website and gave us a much clearer understanding of what needed to be done to strengthen our visibility on Google. The team was responsive, organized, and easy to work with.',
                'photo' => 'images/testimonial-1.jpeg',
                'sort_order' => 1,
            ],
            [
                'name' => 'Genevieve',
                'role' => '',
                'quote' => 'What I appreciated most was that Sphere looked beyond just the website. They reviewed our SEO, online presence, competitors, and overall customer experience and gave us practical recommendations we could actually use.',
                'photo' => 'images/testimonial-2.jpeg',
                'sort_order' => 2,
            ],
            [
                'name' => 'S. Mike',
                'role' => 'Owner of Tymey Roofing',
                'quote' => 'Working with Sphere has helped us become much more intentional about how our business appears online. From website improvements to search visibility and content, the team has been proactive in finding opportunities for us to grow.',
                'photo' => 'images/testimonial-3.jpeg',
                'sort_order' => 3,
            ],
            [
                'name' => 'Vikas',
                'role' => 'Founder of WindSmit Air',
                'quote' => 'Sphere takes a very detailed approach to digital marketing. They use tools like Semrush to identify SEO opportunities while also helping us understand how search and AI visibility are changing. It feels like we have a team continuously looking for ways to improve our online presence.',
                'photo' => 'images/testimonial-4.jpeg',
                'sort_order' => 4,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::query()->updateOrCreate(
                ['name' => $testimonial['name']],
                [
                    ...$testimonial,
                    'is_active' => true,
                ],
            );
        }
    }
}
