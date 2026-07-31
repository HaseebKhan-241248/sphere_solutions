<?php

namespace App\Filament\Pages;

use App\Models\Setting;

class ManageRefundPolicy extends ManagePolicyPage
{
    protected static ?string $navigationLabel = 'Refund Policy';

    protected static ?string $slug = 'refund-policy';

    protected static ?int $navigationSort = 3;

    public static function getSettingKey(): string
    {
        return Setting::REFUND_POLICY;
    }
}
