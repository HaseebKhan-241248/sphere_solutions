<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page { margin: 28px 36px; }
        body { font-family: DejaVu Sans, sans-serif; font-size: 11px; color: #222; }
        .header { border-bottom: 2px solid #4870F8; padding-bottom: 10px; margin-bottom: 18px; }
        .brand { display: table; width: 100%; }
        .brand-left { display: table-cell; vertical-align: middle; width: 55%; }
        .brand-right { display: table-cell; vertical-align: middle; text-align: right; font-size: 10px; color: #555; }
        .logo { max-height: 48px; }
        .title { font-size: 28px; font-weight: bold; letter-spacing: 1px; margin: 18px 0 8px; }
        .meta { margin-bottom: 16px; }
        .meta td { padding: 2px 0; }
        .payable { margin: 12px 0 18px; }
        .client-logo { max-height: 42px; margin-bottom: 6px; }
        table.items { width: 100%; border-collapse: collapse; margin-top: 8px; }
        table.items th { background: #4870F8; color: #fff; text-align: left; padding: 8px; font-size: 10px; }
        table.items td { border-bottom: 1px solid #ddd; padding: 8px; vertical-align: top; }
        .desc-line { margin: 0 0 2px 0; }
        .totals { width: 280px; margin-left: auto; margin-top: 14px; }
        .totals td { padding: 4px 0; }
        .grand { font-weight: bold; font-size: 13px; border-top: 2px solid #222; padding-top: 6px; }
        .section-title { font-weight: bold; margin-top: 18px; margin-bottom: 4px; text-transform: uppercase; }
        .footer-text { white-space: pre-line; color: #444; line-height: 1.45; }
        .page-num { position: fixed; bottom: 0; right: 0; font-size: 9px; color: #888; }
    </style>
</head>
<body>
<div class="header">
    <div class="brand">
        <div class="brand-left">
            @if($company['logo'])
                <img src="{{ $company['logo'] }}" class="logo" alt="Sphere">
            @endif
            <div style="font-size:10px; margin-top:4px;">{{ $company['tagline'] }}</div>
        </div>
        <div class="brand-right">
            <div>{{ $company['website'] }}</div>
            <div>{{ $company['email'] }}</div>
            <div>{{ $company['phone'] }}</div>
        </div>
    </div>
</div>

<div class="title">INVOICE</div>

<table class="meta" width="100%">
    <tr>
        <td><strong>Invoice Number:</strong> {{ $invoice->invoice_number }}</td>
        <td style="text-align:right;"><strong>Date:</strong> {{ $invoice->invoice_date->format('m/d/Y') }}</td>
    </tr>
</table>

<div class="payable">
    <div class="section-title">Payable To</div>
    @if($clientLogo)
        <img src="{{ $clientLogo }}" class="client-logo" alt="{{ $client?->name ?? 'Client' }}">
    @endif
    @if($client)
    <div><strong>{{ $client->name }}</strong></div>
    @if(filled($client->address))<div>{{ $client->address }}</div>@endif
    @endif
</div>

<table class="items">
    <thead>
    <tr>
        <th style="width:65%">Item Description</th>
        <th style="width:17%">Price</th>
        <th style="width:18%">Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>
                @foreach(preg_split('/\R/', $item->description) as $line)
                    @if(trim($line) !== '')
                        <p class="desc-line">{{ trim($line) }}</p>
                    @endif
                @endforeach
            </td>
            <td>{{ $invoice->formatAmount($item->price) }}</td>
            <td>{{ $invoice->formatAmount($item->total) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<table class="totals">
    <tr><td>Sub Total</td><td style="text-align:right;">{{ $invoice->formatAmount($invoice->subtotal) }}</td></tr>
    <tr><td>GST ({{ number_format($invoice->gst_rate, 0) }}%)</td><td style="text-align:right;">{{ $invoice->formatAmount($invoice->gst_amount) }}</td></tr>
    <tr class="grand">
        <td>Grand Total</td>
        <td style="text-align:right;">{{ $invoice->formatAmount($invoice->grand_total) }}</td>
    </tr>
</table>

<div class="section-title">Payment Instructions</div>
<div class="footer-text">{{ $paymentInstructions }}</div>

<div class="section-title">Notes:</div>
<div class="footer-text">{{ $notes }}</div>

<div class="page-num">-- 1 of 1 --</div>
</body>
</html>
