<?php

namespace Database\Seeders;

use App\Support\SiteSettings;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = SiteSettings::defaults();

        // Keep logos null so the existing public image defaults are used until admin uploads.
        unset($defaults[SiteSettings::LOGO_DESKTOP], $defaults[SiteSettings::LOGO_MOBILE]);

        SiteSettings::saveMany($defaults);
    }
}
