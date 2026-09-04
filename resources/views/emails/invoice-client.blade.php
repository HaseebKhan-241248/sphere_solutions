<x-mail::message>
# Invoice {{ $invoice->invoice_number }}

Hi {{ $client?->name ?? 'there' }},

Please find your invoice attached as a PDF.

**Invoice number:** {{ $invoice->invoice_number }}  
**Invoice date:** {{ $invoice->invoice_date?->format('M j, Y') ?? '—' }}  
**Total amount:** {{ $totalFormatted }}

If you have any questions about this invoice, just reply to this email.

Thanks,<br>
The {{ $company }} team
</x-mail::message>
