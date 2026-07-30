<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Contact $contact)
    {
    }

    public function envelope(): Envelope
    {
        $subject = $this->contact->subject
            ? 'New Contact: '.$this->contact->subject
            : 'New Contact Form Submission';

        return new Envelope(
            subject: $subject,
            replyTo: [$this->contact->email],
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact.admin',
        );
    }
}
