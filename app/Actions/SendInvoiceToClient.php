<?php

namespace App\Actions;

use App\Mail\InvoiceClientMail;
use App\Models\Invoice;
use App\Services\InvoicePdfService;
use Illuminate\Support\Facades\Mail;
use InvalidArgumentException;
use RuntimeException;

class SendInvoiceToClient
{
    public function __construct(
        private readonly InvoicePdfService $pdfService,
    ) {}

    public function __invoke(Invoice $invoice): void
    {
        $invoice->loadMissing(['client', 'items']);

        $email = $invoice->client?->email;

        if (! filled($email) || ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                'This invoice client does not have a valid email address.'
            );
        }

        $pdf = $this->pdfService->makePdf($invoice);
        $contents = (string) $pdf->output();

        if ($contents === '') {
            throw new RuntimeException('Unable to generate the invoice PDF attachment.');
        }

        Mail::to($email)->send(new InvoiceClientMail(
            $invoice,
            $contents,
            $this->pdfService->filename($invoice),
        ));
    }
}
