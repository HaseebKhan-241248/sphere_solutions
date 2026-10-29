<?php

namespace Tests\Unit;

use App\Services\Contact\ContactSpamGuard;
use Illuminate\Http\Request;
use Tests\TestCase;

class ContactSpamGuardTest extends TestCase
{
    public function test_make_form_token_round_trips_with_valid_timing(): void
    {
        $guard = app(ContactSpamGuard::class);
        $token = $guard->makeFormToken(time() - 10);

        $request = Request::create('/contact', 'POST', [
            'website' => '',
            'form_token' => $token,
            'message' => 'Normal inquiry about web design.',
        ]);

        $this->assertFalse($guard->shouldBlockSilently($request));
    }

    public function test_blocks_when_honeypot_is_filled(): void
    {
        $guard = app(ContactSpamGuard::class);

        $request = Request::create('/contact', 'POST', [
            'website' => 'http://bot.test',
            'form_token' => $guard->makeFormToken(time() - 10),
            'message' => 'Hello',
        ]);

        $this->assertTrue($guard->shouldBlockSilently($request));
    }

    public function test_blocks_tampered_form_token(): void
    {
        $guard = app(ContactSpamGuard::class);

        $request = Request::create('/contact', 'POST', [
            'website' => '',
            'form_token' => (time() - 10).'.invalid-signature',
            'message' => 'Hello',
        ]);

        $this->assertTrue($guard->shouldBlockSilently($request));
    }
}
