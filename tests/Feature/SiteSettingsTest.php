<?php

namespace Tests\Feature;

use App\Filament\Pages\ManageSiteSettings;
use App\Models\Setting;
use App\Models\User;
use App\Support\SiteSettings;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class SiteSettingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_site_uses_default_contact_details_before_admin_saves(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Vancouver, BC, Canada')
            ->assertSee('info@spheremarketingsolutions.com')
            ->assertSee('+1 (604) 313-7091')
            ->assertSee('https://x.com/SpMarkSolutions', false)
            ->assertDontSee('wa.me/16043137091', false);
    }

    public function test_admin_can_save_site_settings_and_enable_whatsapp(): void
    {
        Storage::fake('public');
        $admin = User::factory()->create();

        Livewire::actingAs($admin)
            ->test(ManageSiteSettings::class)
            ->fillForm([
                SiteSettings::ADDRESS => 'Toronto, ON, Canada',
                SiteSettings::PHONE => '+1 (416) 555-0100',
                SiteSettings::EMAIL => 'hello@example.com',
                SiteSettings::FACEBOOK_URL => 'https://facebook.com/sphere',
                SiteSettings::TWITTER_URL => 'https://x.com/sphere',
                SiteSettings::INSTAGRAM_URL => 'https://instagram.com/sphere',
                SiteSettings::LINKEDIN_URL => 'https://linkedin.com/company/sphere',
                SiteSettings::WHATSAPP_ENABLED => true,
                SiteSettings::WHATSAPP_NUMBER => '16043137091',
                SiteSettings::WHATSAPP_LABEL => 'Need Help? Chat with us',
                SiteSettings::WHATSAPP_MESSAGE => 'Hello from the website',
            ])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertNotified();

        $this->assertSame('Toronto, ON, Canada', Setting::getValue(SiteSettings::ADDRESS));
        $this->assertSame('1', Setting::getValue(SiteSettings::WHATSAPP_ENABLED));
        $this->assertTrue(SiteSettings::whatsappEnabled());
        $this->assertStringContainsString('wa.me/16043137091', (string) SiteSettings::whatsappUrl());
        $this->assertStringContainsString(rawurlencode('Hello from the website'), (string) SiteSettings::whatsappUrl());

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Toronto, ON, Canada')
            ->assertSee('hello@example.com')
            ->assertSee('Need Help?')
            ->assertSee('Chat with us')
            ->assertSee('wa.me/16043137091', false);
    }

    public function test_guests_cannot_access_site_settings_page(): void
    {
        $this->get('/admin/site-settings')->assertRedirect('/admin/login');
    }

    public function test_contact_page_uses_site_settings(): void
    {
        SiteSettings::saveMany([
            SiteSettings::ADDRESS => 'Burnaby, BC',
            SiteSettings::PHONE => '+1 (604) 111-2222',
            SiteSettings::EMAIL => 'contact@example.com',
        ]);

        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('Burnaby, BC')
            ->assertSee('+1 (604) 111-2222')
            ->assertSee('contact@example.com');
    }
}
