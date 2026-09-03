<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'main_heading',
        'main_image',
        'sub_heading',
        'contact_form',
        'contact_detail',
        'our_office',
        'call_us',
        'mail_us',
        'location',
        'send_message',
    ];
}
