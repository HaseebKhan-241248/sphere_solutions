<?php

namespace App\Actions\EntrepreneurSignup;

use App\Mail\EntrepreneurSignupUserMail;
use App\Models\EntrepreneurSignup;
use Illuminate\Support\Facades\Mail;
use RuntimeException;

class SendEntrepreneurSignupUserEmailAction
{
    public function handle(EntrepreneurSignup $signup): void
    {
        if (blank($signup->email)) {
            throw new RuntimeException('Signup email is missing.');
        }

        Mail::to($signup->email)->send(new EntrepreneurSignupUserMail($signup));
    }
}
