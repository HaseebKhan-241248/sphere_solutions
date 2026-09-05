<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function heroImageUrl(): ?string
    {
        if (blank($this->main_image) || ! Storage::disk('public')->exists($this->main_image)) {
            return null;
        }

        return Storage::disk('public')->url($this->main_image);
    }
}
