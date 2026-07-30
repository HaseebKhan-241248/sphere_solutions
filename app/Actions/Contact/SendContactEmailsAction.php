<?php

namespace App\Actions\Contact;

use App\Mail\ContactAdminMail;
use App\Mail\ContactCustomerMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use RuntimeException;

class SendContactEmailsAction
{
    public function handle(Contact $contact): void
    {
        $adminEmail = config('contact.admin_email');

        if (blank($adminEmail)) {
            throw new RuntimeException('Admin email is not configured.');
        }

        Mail::to($adminEmail)->send(new ContactAdminMail($contact));
        Mail::to($contact->email)->send(new ContactCustomerMail($contact));
    }
}
