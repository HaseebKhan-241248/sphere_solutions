<!doctype html>
<html>
<head>
    <meta charset="utf-8" />

    <style>
        @page {
            margin: 130px;
            margin-right: 140px !important;
            margin-left: 110px !important;
        }

        body {
            font-family:
                DejaVu Sans,
                sans-serif;
            font-size: 10px;
            color: #1a2b3c;
        }

        table {
            border-collapse: collapse;
        }
        table.top {
            width: 100%;
            margin-bottom: 2px;
        }

        table.top td {
            vertical-align: top;
        }

        td.col-left {
            width: 32%;
            padding-right: 8px;
            padding-top: 18px;
            text-align: left;
        }

        td.col-right {
            width: 48%;
            text-align: right;
        }
        .company-info {
            width: 100%;
        }

        .company-info td {
            vertical-align: middle;
        }

        .logo-cell {
            width: 66px;
            vertical-align: middle;
        }

        .company-logo {
            width: 70px;
            height: 70px;
            display: block;
        }

        .details-cell {
            vertical-align: middle;
            padding-left: 12px;
            text-align: left;
            padding-top: 18px;
        }

        .company-name {
            font-size: 13px;
            font-weight: bold;
            color: #1a2b3c;
            letter-spacing: 0.1px;
            line-height: 14px;
            white-space: nowrap;
            margin: 0;
            padding: 0;
        }

        .company-tagline {
            font-size: 9.5px;
            color: #5a6a78;
            line-height: 11px;
            margin: 2px 0 0 0;
            padding: 0;
        }

        .section-title {
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 0.45px;
            color: #1a2b3c;
            margin-top: 22px;
            margin-bottom: 6px;
            margin-left: 12px !important;
            text-align: left;
        }

        .client-name {
            font-size: 11px;
            color: #1a2b3c;
            font-weight: normal;
            text-align: left;
            margin-left: 12px !important;
        }

        .client-address {
            font-size: 9px;
            color: #3d4a55;
            margin-top: 3px;
            text-align: left;
        }

        .payment-lines {
            color: #1a2b3c;
            line-height: 1.55;
            white-space: pre-line;
            font-size: 10px;
            text-align: left;
            padding-left: 22px;
        }

        .ring-table {
            width: 300px;
            height: 300px;

            border-collapse: collapse;

            background-image: url("{{ $ringImage }}");
            background-repeat: no-repeat;

            background-position: center left;

            background-size: 290px 290px;

            margin: -64px auto 0 auto;
        }

        .ring-table td {
            width: 300px;
            height: 300px;

            padding: 0;

            text-align: center;
            vertical-align: top;
        }

        .ring-content {
            width: 300px;

            padding-top: 92px;

            text-align: center;
        }

        .ring-invoice-text {
            width: 300px;

            margin: 0 0 30px 0;
            padding: 0;

            text-align: center;

            font-size: 25px;
            font-weight: bold;

            color: #1a2b3c;

            letter-spacing: 0.8px;
            line-height: 1;
        }

        .ring-logo-box {
            width: 300px;

            margin: 0;
            padding: 0;

            text-align: center;
        }

        .ring-logo-box img {
            width: 132px;
            max-width: 132px;
            max-height: 40px;

            display: inline-block;
        }

        .invoice-meta {
            width: 60px;
            text-align: right;

            margin: 6px auto 0 auto;

            color: #1a2b3c;

            white-space: nowrap;

            line-height: 1.7;

            font-size: 9.5px;
        }

        .items-head-wrap {
            width: 95%;
            margin: 22px auto 0 auto;

            background-color: #2a737e;

            border-radius: 40px;
        }

        table.items-head {
            width: 100%;
        }

        table.items-head td {
            color: #ffffff;

            font-size: 10px;

            font-weight: bold;

            letter-spacing: 0.6px;

            padding: 10px 22px;
        }

        table.items-head td.hdr-first {
            text-align: left;
        }

        table.items-head td.hdr-mid,
        table.items-head td.hdr-last {
            text-align: right;
        }

        .items-body-wrap {
            width: 95%;
            margin: 14px auto 0 auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 14px 0 24px 0;
        }

        table.items-body {
            width: 100%;
            margin-top: 0;
        }

        table.items-body td {
            padding: 0 12px 4px 12px;

            vertical-align: top;

            color: #3d4a55;

            font-size: 11px;
        }

        table.items-body td.price,
        table.items-body td.total {
            text-align: right;

            white-space: nowrap;
        }

        .desc-line {
            margin: 0 0 3px 0;
        }

        .summary-wrap {
            width: 91%;
            background-color: transparent;
            border-radius: 0;
        }

        table.bottom {
            width: 100%;
        }

        table.bottom td {
            vertical-align: top;
        }

        td.notes-col {
            width: 46%;
            padding: 10px 18px 10px 20px;
        }

        td.totals-col {
            width: 54%;
            padding: 0;
        }

        .notes-title {
            font-size: 10px;

            font-weight: bold;

            letter-spacing: 0.6px;

            color: #1a365d;

            margin-bottom: 6px;
        }

        .notes-text {
            color: #4a5864;

            line-height: 1.5;

            white-space: pre-line;

            font-size: 9.5px;
        }

        .totals-card {
            width: 100%;
            background: #ffffff;
            border-radius: 14px;
            padding: 10px 20px;
        }

        table.totals-box {
            width: 100%;
        }

        table.totals-box td {
            padding: 5px 0;
        }

        table.totals-box .label {
            font-size: 10px;

            font-weight: bold;

            letter-spacing: 0.5px;

            color: #1a365d;
        }

        table.totals-box .value {
            text-align: right;

            color: #3d4a55;

            font-size: 11px;
        }

        table.totals-box .grand-row .label {
            font-size: 12px;

            padding-top: 8px;
        }

        table.totals-box .grand-row .value {
            font-weight: bold;

            font-size: 13px;

            color: #1a365d;

            padding-top: 8px;
        }

        .footer-band {
            width: calc(100% + 88px);
            margin-left: -44px;
            height: 180px;
            background-color: #15617c;
            text-align: center;
            page-break-inside: avoid;
        }

        table.footer-center {
            width: 100%;
            margin-top: 30px;
        }

        table.footer-pill {
            width: 550px;
            background-color: #0e1c28;
            border-radius: 28px;
            margin: 20px auto;
            table-layout: fixed;
        }
        table.footer-pill > tbody > tr > td {
            color: #ffffff;
            font-size: 8.5px;
            line-height: 12px;
            padding: 8px 8px;
            white-space: nowrap;
            vertical-align: middle;
        }

        table.footer-pill > tbody > tr > td:nth-child(1) {
            width: 32%;
        }

        table.footer-pill > tbody > tr > td:nth-child(2) {
            width: 24%;
        }

        table.footer-pill > tbody > tr > td:nth-child(3) {
            width: 34%;
        }

        .footer-item {
            vertical-align: middle;
            text-align: center;
            padding: 0 8px;
        }

        .footer-item-inner {
            border-collapse: collapse;
            margin: 0 auto;
        }

        .footer-icon-cell {
            width: 18px;
            height: 18px;
            padding: 0;
            vertical-align: middle;
            text-align: center;
        }

        .footer-text-cell {
            padding: 0 0 5px 5px;
            vertical-align: middle;
            text-align: left;

            color: #ffffff;
            font-size: 8.5px;
            line-height: 18px;

            white-space: nowrap;
        }

        .footer-icon {
            width: 10px;
            height: 10px;
            display: block;
            margin: 0;
        }
    </style>
</head>

<body>
@php $currency = trim((string) ($invoice->currency ?? '')); $formatLine = function ($amount) { return
        '$'.number_format((float) ($amount ?? 0), 2); }; $formatPlain = function ($amount) { return
        number_format((float) ($amount ?? 0), 2); }; $formatGrand = function ($amount) use ($currency) { return '$
        '.number_format( (float) ($amount ?? 0), 2 ).($currency !== '' ? ' '.$currency : ''); }; $svgGlobe = '<svg
            xmlns="http://www.w3.org/2000/svg"
            width="14"
            height="14"
            viewBox="0 0 24 24"
            fill="none"
        >
            <circle cx="12" cy="12" r="9" stroke="#A8D5D8" stroke-width="1.8" />

            <ellipse cx="12" cy="12" rx="4" ry="9" stroke="#A8D5D8" stroke-width="1.8" />

            <path d="M3 12h18" stroke="#A8D5D8" stroke-width="1.8" /></svg
        >'; $svgPhone = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
            <path
                fill="#3ECF8E"
                d="M12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.4 1.3 4.8L2 22l5.3-1.4C8.7 21.5 10.3 22 12 22c5.5 0 10-4.5 10-10S17.5 2 12 2zm5.5 14.2c-.2.5-1.1 1-1.8 1.1-.5.1-1.1 0-1.8-.3-3.2-1.3-5.5-3.8-6.6-6.6-.3-.7-.4-1.3-.3-1.8.1-.7.6-1.6 1.1-1.8.2-.1.4 0 .5.1l1.6 1.6c.1.1.2.3.1.5l-.7 1.2c.8 1.6 2.1 2.9 3.7 3.7l1.2-.7c.2-.1.4 0 .5.1l1.6 1.6c.2.2.2.3.1.5z"
            /></svg
        >'; $svgMail = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none">
            <rect x="3" y="5" width="18" height="14" rx="2" stroke="#A8D5D8" stroke-width="1.8" />

            <path d="M4 7l8 6 8-6" stroke="#A8D5D8" stroke-width="1.8" /></svg
        >'; $iconGlobe = 'data:image/svg+xml;base64,'.base64_encode($svgGlobe); $iconPhone =
        'data:image/svg+xml;base64,'.base64_encode($svgPhone); $iconMail =
        'data:image/svg+xml;base64,'.base64_encode($svgMail); @endphp

<table class="top">
    <tr>
        <td class="col-left">
            <table class="company-info">
                <tr>
                    @if($company['logo'])
                        <td class="logo-cell">
                            <img
                                src="{{ $company['logo'] }}"
                                class="company-logo"
                                alt="{{ $company['name'] ?? 'Company' }}"
                            />
                        </td>
                    @endif

                    <td class="details-cell">
                        <div class="company-name">{{ $company['name'] ?? '' }}</div>

                        <div class="company-tagline">{{ $company['tagline'] ?? '' }}</div>
                    </td>
                </tr>
            </table>

            <div class="section-title">PAYABLE TO</div>

            @if($client)

                <div class="client-name">{{ $client->name }}</div>

            @endif

            <div class="section-title">PAYMENT INSTRUCTIONS</div>

            <div class="payment-lines">{{ $paymentInstructions }}</div>
        </td>

        <td class="col-right">
            <table class="ring-table">
                <tr>
                    <td>
                        <div class="ring-content">
                            <div class="ring-invoice-text">INVOICE</div>

                            @if($clientLogo)

                                <div class="ring-logo-box">
                                    <img src="{{ $clientLogo }}" alt="{{ $client?->name ?? 'Client' }}" />
                                </div>

                            @endif
                        </div>
                    </td>
                </tr>
            </table>

            <div class="invoice-meta">
                <div>Invoice Number: {{ $invoice->invoice_number }}</div>

                <div>Date: {{ $invoice->invoice_date->format('m/d/Y') }}</div>
            </div>
        </td>
    </tr>
</table>

<div class="items-head-wrap">
    <table class="items-head">
        <tr>
            <td class="hdr-first" style="width: 62%">ITEM DESCRIPTION</td>

            <td class="hdr-mid" style="width: 19%">PRICE</td>

            <td class="hdr-last" style="width: 19%">TOTAL</td>
        </tr>
    </table>
</div>

<div class="items-body-wrap">
    <table class="items-body">
        @foreach($items as $item)

            <tr>
                <td style="width: 62%">
                    @foreach( preg_split('/\R/', $item->description) as $line ) @if(trim($line) !== '')

                        <p class="desc-line">{{ trim($line) }}</p>

                    @endif @endforeach
                </td>

                <td class="price" style="width: 19%">{{ $formatLine($item->price) }}</td>

                <td class="total" style="width: 19%">{{ $formatLine($item->total) }}</td>
            </tr>

        @endforeach
    </table>
</div>

<div class="summary-wrap">
    <table class="bottom">
        <tr>
            <td class="notes-col">
                <div class="notes-title">NOTES:</div>

                <div class="notes-text">{{ $notes }}</div>
            </td>

            <td class="totals-col">
                <div class="totals-card">
                    <table class="totals-box">
                        <tr>
                            <td class="label">SUB TOTAL</td>

                            <td class="value">{{ $formatPlain($invoice->subtotal) }}</td>
                        </tr>

                        <tr>
                            <td class="label">GST ({{ number_format($invoice->gst_rate, 0) }}%)</td>

                            <td class="value">{{ $formatPlain($invoice->gst_amount) }}</td>
                        </tr>

                        <tr class="grand-row">
                            <td class="label">GRAND TOTAL</td>

                            <td class="value">{{ $formatGrand($invoice->grand_total) }}</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="footer-band">
    <table class="footer-center">
        <tr>
            <td align="center">
                <table class="footer-pill">
                    <tr>
                        <td class="footer-item">
                            <table class="footer-item-inner">
                                <tr>
                                    <td class="footer-icon-cell">
                                        <img src="{{ $iconGlobe }}" class="footer-icon" alt="" />
                                    </td>

                                    <td class="footer-text-cell">{{ $company['website'] }}</td>
                                </tr>
                            </table>
                        </td>

                        <td class="footer-item">
                            <table class="footer-item-inner">
                                <tr>
                                    <td class="footer-icon-cell">
                                        <img src="{{ $iconPhone }}" class="footer-icon" alt="" />
                                    </td>

                                    <td class="footer-text-cell">{{ $company['phone'] }}</td>
                                </tr>
                            </table>
                        </td>

                        <td class="footer-item">
                            <table class="footer-item-inner">
                                <tr>
                                    <td class="footer-icon-cell">
                                        <img src="{{ $iconMail }}" class="footer-icon" alt="" />
                                    </td>

                                    <td class="footer-text-cell">{{ $company['email'] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
