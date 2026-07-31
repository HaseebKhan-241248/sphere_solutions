<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use RuntimeException;

class PolicySettingsSeeder extends Seeder
{
    public function run(): void
    {
        $policies = [
            Setting::PRIVACY_POLICY => 'privacy-policy.html',
            Setting::TERMS_AND_CONDITIONS => 'terms-conditions.html',
            Setting::REFUND_POLICY => 'refund-policy.html',
        ];

        foreach ($policies as $key => $filename) {
            $path = database_path('seeders/data/'.$filename);

            if (! is_file($path)) {
                throw new RuntimeException("Missing policy seed file: {$path}");
            }

            $content = file_get_contents($path);

            if ($content === false || trim($content) === '') {
                throw new RuntimeException("Empty policy seed file: {$path}");
            }

            Setting::setValue($key, $content);
        }
    }
}
