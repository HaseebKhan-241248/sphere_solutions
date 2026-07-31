<?php

namespace App\Actions\Newsletter;

use App\Mail\NewsletterSubscriberMail;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;

class SendNewsletterSubscriberEmailAction
{
    public function handle(NewsletterSubscriber $subscriber): void
    {
        Mail::to($subscriber->email)->send(new NewsletterSubscriberMail($subscriber));
    }
}
