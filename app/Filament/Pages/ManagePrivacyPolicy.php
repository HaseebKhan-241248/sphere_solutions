<?php

namespace App\Filament\Pages;

use App\Models\Setting;

class ManagePrivacyPolicy extends ManagePolicyPage
{
    protected static ?string $navigationLabel = 'Privacy Policy';

    protected static ?string $slug = 'privacy-policy';

    protected static ?int $navigationSort = 1;

    public static function getSettingKey(): string
    {
        return Setting::PRIVACY_POLICY;
    }
}
