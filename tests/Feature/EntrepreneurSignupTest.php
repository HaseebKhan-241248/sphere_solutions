<?php

namespace Tests\Feature;

use App\Mail\EntrepreneurSignupAdminMail;
use App\Models\EntrepreneurSignup;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EntrepreneurSignupTest extends TestCase
{
    use RefreshDatabase;

    public function test_page_is_accessible(): void
    {
        $this->get(route('entrepreneur-signup'))
            ->assertOk()
            ->assertSee('Join Sphere’s Global Entrepreneur Network', false);
    }

    public function test_signup_stores_submission_and_sends_admin_email(): void
    {
        Mail::fake();
        config(['contact.admin_email' => 'info@spheremarketingsolutions.com']);

        $payload = [
            'name' => 'Alex Entrepreneur',
            'email' => 'alex@example.com',
            'location' => 'Vancouver, Canada',
            'main_skill' => 'Digital Marketing',
            'additional_skills' => 'SEO, Content',
            'portfolio_url' => 'https://linkedin.com/in/alex',
            'message' => 'Looking to collaborate with Sphere.',
            'consent' => '1',
            'hp_field' => '',
        ];

        $response = $this->postJson(route('entrepreneur-signup.store'), $payload);

        $response->assertOk()
            ->assertJson([
                'message' => 'Thank you for signing up. We have received your information and will contact you if there is a suitable opportunity.',
            ]);

        $this->assertDatabaseHas('entrepreneur_signups', [
            'name' => 'Alex Entrepreneur',
            'email' => 'alex@example.com',
            'main_skill' => 'Digital Marketing',
            'consent' => 1,
        ]);

        Mail::assertSent(EntrepreneurSignupAdminMail::class, function (EntrepreneurSignupAdminMail $mail) {
            return $mail->hasTo('info@spheremarketingsolutions.com')
                && $mail->signup->email === 'alex@example.com';
        });
    }

    public function test_honeypot_spam_is_silently_ignored(): void
    {
        Mail::fake();

        $response = $this->postJson(route('entrepreneur-signup.store'), [
            'name' => 'Bot User',
            'email' => 'bot@example.com',
            'location' => 'Nowhere',
            'main_skill' => 'Spam',
            'consent' => '1',
            'hp_field' => 'http://spam.example',
        ]);

        $response->assertOk();
        $this->assertDatabaseCount('entrepreneur_signups', 0);
        Mail::assertNothingSent();
    }

    public function test_signup_requires_required_fields(): void
    {
        Mail::fake();

        $response = $this->postJson(route('entrepreneur-signup.store'), []);

        $response->assertStatus(422);

        $errors = $response->json('errors');

        $this->assertIsArray($errors);
        $this->assertArrayHasKey('name', $errors);
        $this->assertArrayHasKey('email', $errors);
        $this->assertArrayHasKey('location', $errors);
        $this->assertArrayHasKey('main_skill', $errors);
        $this->assertArrayHasKey('consent', $errors);

        Mail::assertNothingSent();
    }

    public function test_signup_rejects_invalid_email(): void
    {
        Mail::fake();

        $response = $this->postJson(route('entrepreneur-signup.store'), [
            'name' => 'Alex',
            'email' => 'not-an-email',
            'location' => 'Toronto',
            'main_skill' => 'SEO Specialist',
            'consent' => '1',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);

        Mail::assertNothingSent();
    }

    public function test_admin_can_view_entrepreneur_signups(): void
    {
        $admin = User::factory()->create();

        EntrepreneurSignup::query()->create([
            'name' => 'Shown Entrepreneur',
            'email' => 'shown@example.com',
            'location' => 'London, UK',
            'main_skill' => 'Designer',
            'consent' => true,
        ]);

        $response = $this->actingAs($admin)
            ->get('/admin/entrepreneur-signups');

        $response->assertOk()
            ->assertSee('shown@example.com')
            ->assertSee('Shown Entrepreneur');
    }
}
