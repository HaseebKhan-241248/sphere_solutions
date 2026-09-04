<?php

namespace App\Mail;

use App\Models\Invoice;
use App\Support\SiteSettings;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvoiceClientMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Invoice $invoice,
        public string $pdfContents,
        public string $pdfFilename,
    ) {}

    public function envelope(): Envelope
    {
        $company = 'SPHERE MARKETING SOLUTIONS';
        $fromEmail = SiteSettings::get(SiteSettings::EMAIL) ?? config('mail.from.address');

        return new Envelope(
            from: new Address($fromEmail, $company),
            subject: 'Invoice '.$this->invoice->invoice_number.' from '.$company,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.invoice-client',
            with: [
                'invoice' => $this->invoice,
                'client' => $this->invoice->client,
                'company' => 'SPHERE MARKETING SOLUTIONS',
                'totalFormatted' => $this->invoice->formatAmount($this->invoice->grand_total),
            ],
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromData(
                fn (): string => $this->pdfContents,
                $this->pdfFilename,
            )->withMime('application/pdf'),
        ];
    }
}
