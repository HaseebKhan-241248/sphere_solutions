<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_us')->updateOrInsert(
            ['id' => 1],
            [
                'main_heading'   => 'Contact Us',
                'main_image'     => null,
                'sub_heading'    => 'If You Have Any Query, Please Contact Us',
                'contact_form'   => 'Full Functional Contact Form',
                'contact_detail' => 'Contact Details',
                'our_office'     => 'Our Office',
                'call_us'        => 'Call Us',
                'mail_us'        => 'Mail Us',
                'location'       => 'Pakistan',
                'send_message'   => 'Send Message',
                'updated_at'     => now(),
            ]
        );
    }
}
