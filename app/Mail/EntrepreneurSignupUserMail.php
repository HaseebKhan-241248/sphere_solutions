<?php

namespace App\Mail;

use App\Models\EntrepreneurSignup;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EntrepreneurSignupUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public EntrepreneurSignup $signup)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'We received your Entrepreneur Network signup — '.config('app.name'),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.entrepreneur-signup.user',
        );
    }
}
