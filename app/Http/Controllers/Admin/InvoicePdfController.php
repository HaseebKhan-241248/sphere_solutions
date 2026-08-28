<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Services\InvoicePdfService;
use Symfony\Component\HttpFoundation\Response;

class InvoicePdfController extends Controller
{
    public function __invoke(Invoice $invoice): Response
    {
        abort_unless(auth()->check(), 403);

        return app(InvoicePdfService::class)->download($invoice);
    }
}
