<?php

namespace Tests\Feature;

use App\Filament\Pages\ManagePrivacyPolicy;
use App\Filament\Pages\ManageRefundPolicy;
use App\Filament\Pages\ManageTermsAndConditions;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PolicySettingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_settings_upsert_by_key(): void
    {
        Setting::setValue(Setting::PRIVACY_POLICY, '<p>First</p>');
        Setting::setValue(Setting::PRIVACY_POLICY, '<p>Updated</p>');

        $this->assertDatabaseCount('settings', 1);
        $this->assertSame('<p>Updated</p>', Setting::getValue(Setting::PRIVACY_POLICY));
    }

    public function test_admin_can_save_privacy_policy(): void
    {
        $admin = User::factory()->create();

        Livewire::actingAs($admin)
            ->test(ManagePrivacyPolicy::class)
            ->fillForm([
                'content' => '<p>Our privacy policy</p>',
            ])
            ->call('save')
            ->assertHasNoFormErrors()
            ->assertNotified();

        $this->assertSame('<p>Our privacy policy</p>', Setting::getValue(Setting::PRIVACY_POLICY));
    }

    public function test_admin_can_update_existing_terms(): void
    {
        Setting::setValue(Setting::TERMS_AND_CONDITIONS, '<p>Old terms</p>');
        $admin = User::factory()->create();

        Livewire::actingAs($admin)
            ->test(ManageTermsAndConditions::class)
            ->assertFormSet([
                'content' => '<p>Old terms</p>',
            ])
            ->fillForm([
                'content' => '<p>New terms</p>',
            ])
            ->call('save')
            ->assertNotified();

        $this->assertDatabaseCount('settings', 1);
        $this->assertSame('<p>New terms</p>', Setting::getValue(Setting::TERMS_AND_CONDITIONS));
    }

    public function test_admin_can_save_refund_policy(): void
    {
        $admin = User::factory()->create();

        Livewire::actingAs($admin)
            ->test(ManageRefundPolicy::class)
            ->fillForm([
                'content' => '<p>Refund rules</p>',
            ])
            ->call('save')
            ->assertNotified();

        $this->assertSame('<p>Refund rules</p>', Setting::getValue(Setting::REFUND_POLICY));
    }

    public function test_guests_cannot_access_policy_pages(): void
    {
        $this->get('/admin/privacy-policy')->assertRedirect('/admin/login');
        $this->get('/admin/terms-and-conditions')->assertRedirect('/admin/login');
        $this->get('/admin/refund-policy')->assertRedirect('/admin/login');
    }
}
