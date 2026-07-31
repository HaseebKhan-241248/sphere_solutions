<?php

namespace App\Filament\Pages;

use App\Models\Setting;

class ManageTermsAndConditions extends ManagePolicyPage
{
    protected static ?string $navigationLabel = 'Terms & Conditions';

    protected static ?string $slug = 'terms-and-conditions';

    protected static ?int $navigationSort = 2;

    public static function getSettingKey(): string
    {
        return Setting::TERMS_AND_CONDITIONS;
    }
}
