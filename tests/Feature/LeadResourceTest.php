<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class LeadResourceTest extends TestCase
{
    use DatabaseTransactions;

    public function test_admin_can_view_leads_from_contact_form(): void
    {
        $admin = User::factory()->create([
            'email' => 'admin-leads@example.com',
        ]);

        Contact::query()->create([
            'name' => 'Lead From Contact',
            'email' => 'lead@example.com',
            'mobile' => '+1 604 555 0199',
            'subject' => 'Need a quote',
            'message' => 'Please contact me about packages.',
        ]);

        $response = $this->actingAs($admin)
            ->get('/admin/leads');

        $response->assertOk()
            ->assertSee('Lead From Contact')
            ->assertSee('lead@example.com')
            ->assertSee('Need a quote');
    }

    public function test_guests_cannot_access_leads(): void
    {
        $response = $this->get('/admin/leads');

        $response->assertRedirect('/admin/login');
    }
}
