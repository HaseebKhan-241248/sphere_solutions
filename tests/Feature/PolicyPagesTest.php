<?php

namespace Tests\Feature;

use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PolicyPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_policy_pages_show_seeded_content_with_bold(): void
    {
        Setting::setValue(Setting::PRIVACY_POLICY, '<h2><strong>Privacy Policy</strong></h2><p>We protect your data with <strong>care</strong>.</p>');
        Setting::setValue(Setting::TERMS_AND_CONDITIONS, '<h2><strong>Terms &amp; Conditions</strong></h2><p>Please read these <strong>terms</strong>.</p>');
        Setting::setValue(Setting::REFUND_POLICY, '<h2><strong>Refund Policy</strong></h2><p>Refunds within <strong>30 days</strong>.</p>');

        $this->get(route('privacy-policy'))
            ->assertOk()
            ->assertSee('Privacy Policy', false)
            ->assertSee('<strong>care</strong>', false);

        $this->get(route('terms-conditions'))
            ->assertOk()
            ->assertSee('Terms & Conditions', false)
            ->assertSee('<strong>terms</strong>', false);

        $this->get(route('refund-policy'))
            ->assertOk()
            ->assertSee('Refund Policy', false)
            ->assertSee('<strong>30 days</strong>', false);
    }

    public function test_empty_policy_shows_coming_soon(): void
    {
        Setting::query()->where('key', Setting::PRIVACY_POLICY)->delete();

        $this->get(route('privacy-policy'))
            ->assertOk()
            ->assertSee('Coming soon');
    }

    public function test_policy_settings_seeder_upserts_content(): void
    {
        $this->seed(\Database\Seeders\PolicySettingsSeeder::class);

        $this->assertNotEmpty(Setting::getValue(Setting::PRIVACY_POLICY));
        $this->assertNotEmpty(Setting::getValue(Setting::TERMS_AND_CONDITIONS));
        $this->assertNotEmpty(Setting::getValue(Setting::REFUND_POLICY));
        $this->assertStringContainsString('<strong>', Setting::getValue(Setting::PRIVACY_POLICY));

        $this->get(route('privacy-policy'))
            ->assertOk()
            ->assertSee('Information Collection', false);
    }
}
