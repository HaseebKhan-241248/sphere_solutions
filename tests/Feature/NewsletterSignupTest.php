<?php

namespace Tests\Feature;

use App\Mail\NewsletterSubscriberMail;
use App\Models\NewsletterSubscriber;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class NewsletterSignupTest extends TestCase
{
    use DatabaseTransactions;

    public function test_newsletter_signup_stores_subscriber_and_sends_email(): void
    {
        Mail::fake();

        $response = $this->postJson(route('newsletter.store'), [
            'email' => 'subscriber@example.com',
        ]);

        $response->assertOk()
            ->assertJson([
                'message' => 'Thank you for subscribing! Please check your email.',
            ]);

        $this->assertDatabaseHas('newsletter_subscribers', [
            'email' => 'subscriber@example.com',
        ]);

        Mail::assertSent(NewsletterSubscriberMail::class, function (NewsletterSubscriberMail $mail): bool {
            return $mail->hasTo('subscriber@example.com');
        });
    }

    public function test_duplicate_signup_does_not_create_or_resend(): void
    {
        Mail::fake();

        NewsletterSubscriber::query()->create([
            'email' => 'subscriber@example.com',
        ]);

        $response = $this->postJson(route('newsletter.store'), [
            'email' => 'Subscriber@example.com',
        ]);

        $response->assertOk()
            ->assertJson([
                'message' => 'You are already subscribed to our newsletter.',
            ]);

        $this->assertDatabaseCount('newsletter_subscribers', 1);
        Mail::assertNothingSent();
    }

    public function test_newsletter_requires_valid_email(): void
    {
        $response = $this->postJson(route('newsletter.store'), [
            'email' => 'not-an-email',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    }

    public function test_admin_can_view_newsletter_subscribers(): void
    {
        $admin = User::factory()->create();

        NewsletterSubscriber::query()->create([
            'email' => 'shown@example.com',
        ]);

        $response = $this->actingAs($admin)
            ->get('/admin/newsletter-subscribers');

        $response->assertOk()
            ->assertSee('shown@example.com');
    }
}
