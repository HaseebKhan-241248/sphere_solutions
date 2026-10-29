<?php

namespace Tests\Feature;

use App\Mail\ContactAdminMail;
use App\Mail\ContactCustomerMail;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        RateLimiter::clear('127.0.0.1');
        RateLimiter::clear('contact-day:127.0.0.1');
    }

    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'mobile' => '+1 604 555 0100',
            'subject' => 'Website inquiry',
            'message' => 'Hello, I would like to know more about your services.',
        ], $overrides);
    }

    public function test_contact_form_stores_submission_and_sends_emails(): void
    {
        Mail::fake();
        config(['contact.admin_email' => 'admin@sp']);

        $response = $this->postJson(route('contact.store'), $this->validPayload());

        $response->assertOk()
            ->assertJson([
                'message' => 'Thank you! We got your message. Our team will contact you soon.',
            ]);

        $this->assertDatabaseHas('contacts', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'subject' => 'Website inquiry',
        ]);

        Mail::assertSent(ContactAdminMail::class, function (ContactAdminMail $mail) {
            return $mail->hasTo('admin@sp')
                && $mail->contact->email === 'jane@example.com';
        });

        Mail::assertSent(ContactCustomerMail::class, function (ContactCustomerMail $mail) {
            return $mail->hasTo('jane@example.com')
                && $mail->contact->name === 'Jane Doe';
        });
    }

    public function test_contact_form_requires_name_email_and_message(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.store'), []);

        $response->assertStatus(422);

        $errors = $response->json('errors');

        $this->assertIsArray($errors);
        $this->assertArrayHasKey('name', $errors);
        $this->assertArrayHasKey('email', $errors);
        $this->assertArrayHasKey('message', $errors);

        Mail::assertNothingSent();
    }

    public function test_contact_form_rejects_invalid_email(): void
    {
        Mail::fake();

        $response = $this->postJson(route('contact.store'), [
            'name' => 'Jane Doe',
            'email' => 'not-an-email',
            'message' => 'Hello there',
        ]);

        $response->assertStatus(422);

        $errors = $response->json('errors');

        $this->assertIsArray($errors);
        $this->assertArrayHasKey('email', $errors);

        Mail::assertNothingSent();
    }

    public function test_contact_form_is_rate_limited(): void
    {
        Mail::fake();
        config(['contact.admin_email' => 'admin@sp']);

        for ($i = 0; $i < 3; $i++) {
            $this->postJson(route('contact.store'), $this->validPayload([
                'email' => "user{$i}@example.com",
            ]))->assertOk();
        }

        $this->postJson(route('contact.store'), $this->validPayload([
            'email' => 'blocked@example.com',
        ]))->assertStatus(429);

        $this->assertDatabaseCount('contacts', 3);
    }

    public function test_contact_model_is_created_with_fillable_fields(): void
    {
        $contact = Contact::query()->create([
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'mobile' => null,
            'subject' => null,
            'message' => 'Test message',
        ]);

        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'message' => 'Test message',
        ]);
    }
}
