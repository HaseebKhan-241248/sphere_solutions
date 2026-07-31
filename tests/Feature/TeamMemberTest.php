<?php

namespace Tests\Feature;

use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class TeamMemberTest extends TestCase
{
    use DatabaseTransactions;

    public function test_team_section_renders_active_members_on_home(): void
    {
        TeamMember::query()->create([
            'name' => 'Test Member',
            'role' => 'Designer',
            'photo' => 'images/team-1.jpg',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        TeamMember::query()->create([
            'name' => 'Hidden Member',
            'role' => 'Intern',
            'photo' => 'images/team-2.jpg',
            'sort_order' => 2,
            'is_active' => false,
        ]);

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Test Member')
            ->assertSee('Designer')
            ->assertDontSee('Hidden Member');
    }

    public function test_about_and_our_team_pages_show_members(): void
    {
        TeamMember::query()->create([
            'name' => 'About Team Person',
            'role' => 'Manager',
            'photo' => 'images/CEO.png',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $this->get(route('about'))
            ->assertOk()
            ->assertSee('About Team Person');

        $this->get(route('our-team'))
            ->assertOk()
            ->assertSee('About Team Person')
            ->assertDontSee('>Pages<', false);
    }

    public function test_admin_can_manage_team_members(): void
    {
        $admin = User::factory()->create();

        TeamMember::query()->create([
            'name' => 'Admin Visible',
            'role' => 'CEO',
            'photo' => 'images/CEO.png',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $this->actingAs($admin)
            ->get('/admin/team-members')
            ->assertOk()
            ->assertSee('Admin Visible');
    }
}
