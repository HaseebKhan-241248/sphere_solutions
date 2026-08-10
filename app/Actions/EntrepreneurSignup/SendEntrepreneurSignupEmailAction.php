<?php

namespace App\Actions\EntrepreneurSignup;

use App\Mail\EntrepreneurSignupAdminMail;
use App\Models\EntrepreneurSignup;
use Illuminate\Support\Facades\Mail;
use RuntimeException;

class SendEntrepreneurSignupEmailAction
{
    public function handle(EntrepreneurSignup $signup): void
    {
        $adminEmail = config('contact.admin_email');

        if (blank($adminEmail)) {
            throw new RuntimeException('Admin email is not configured.');
        }

        Mail::to($adminEmail)->send(new EntrepreneurSignupAdminMail($signup));
    }
}
