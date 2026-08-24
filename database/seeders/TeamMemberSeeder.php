<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name' => 'Parathe U',
                'role' => 'Founder & CEO',
                'photo' => 'images/CEO.png',
                'sort_order' => 1,
            ],
            [
                'name' => 'Anirudha D',
                'role' => 'Marketing Consultant',
                'photo' => 'images/CoFounder.png',
                'sort_order' => 2,
            ],

            [
                'name' => 'Sheraz khan',
                'role' => 'Marketing Director',
                'photo' => 'images/MarketingDirector.png',
                'sort_order' => 2,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::query()->updateOrCreate(
                ['name' => $member['name']],
                [
                    ...$member,
                    'facebook_url' => null,
                    'twitter_url' => null,
                    'instagram_url' => null,
                    'linkedin_url' => null,
                    'is_active' => true,
                ],
            );
        }
    }
}
