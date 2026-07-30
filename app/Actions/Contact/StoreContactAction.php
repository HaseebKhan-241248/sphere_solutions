<?php

namespace App\Actions\Contact;

use App\Models\Contact;

class StoreContactAction
{
    public function handle(array $data): Contact
    {
        return Contact::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'] ?? null,
            'subject' => $data['subject'] ?? null,
            'message' => $data['message'],
        ]);
    }
}
