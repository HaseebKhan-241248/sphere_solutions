<?php

namespace App\Services;

use App\Models\Invoice;
use App\Support\InvoiceSettings;
use App\Support\PdfImage;
use App\Support\SiteSettings;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\Response;

class InvoicePdfService
{
    public function download(Invoice $invoice): Response
    {
        $filename = 'invoice-'.preg_replace('/[^A-Za-z0-9._-]+/', '-', $invoice->invoice_number).'.pdf';

        return $this->buildPdf($invoice)->download($filename);
    }

    public function buildPdf(Invoice $invoice)
    {
        $invoice->load(['client', 'items']);

        $companyLogoPath = SiteSettings::get(SiteSettings::LOGO_DESKTOP) ?? 'images/sphere_logo.png';

        $client = $invoice->client;

        return Pdf::loadView('pdf.invoice', [
            'invoice' => $invoice,
            'client' => $client ? (object) [
                'name' => $this->sanitizeText($client->name),
                'address' => $this->sanitizeText($client->address),
            ] : null,
            'items' => $invoice->items->map(fn ($item) => (object) [
                'description' => $this->sanitizeText($item->description),
                'price' => $item->price,
                'total' => $item->total,
            ]),
            'paymentInstructions' => $this->sanitizeText(InvoiceSettings::get(InvoiceSettings::PAYMENT_INSTRUCTIONS)),
            'notes' => $this->sanitizeText(InvoiceSettings::get(InvoiceSettings::NOTES)),
            'company' => [
                'name' => 'SPHERE MARKETING SOLUTIONS',
                'tagline' => 'Digital Marketing Agency',
                'website' => 'www.spheremarketingsolutions.com',
                'email' => $this->sanitizeText(SiteSettings::get(SiteSettings::EMAIL)),
                'phone' => $this->sanitizeText(SiteSettings::get(SiteSettings::PHONE)),
                'logo' => PdfImage::toDataUri($companyLogoPath) ?? PdfImage::toDataUri('images/sphere_logo.png'),
            ],
            'clientLogo' => PdfImage::toDataUri($client?->logo),
            'ringImage' => self::ringImage(),
        ])
            ->setPaper('a4')
            ->setOption('isRemoteEnabled', false)
            ->setOption('isHtml5ParserEnabled', true);
    }

    private static function ringImage(): ?string
    {
        $path = 'images/invoice-ring.png';

        return PdfImage::toDataUri($path);
    }

    private function sanitizeText(?string $text): string
    {
        if ($text === null || $text === '') {
            return '';
        }

        $text = mb_convert_encoding($text, 'UTF-8', 'UTF-8');

        return iconv('UTF-8', 'UTF-8//IGNORE', $text) ?: '';
    }
}
