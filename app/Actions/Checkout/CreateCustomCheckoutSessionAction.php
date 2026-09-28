<?php

namespace App\Actions\Checkout;

use InvalidArgumentException;
use RuntimeException;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CreateCustomCheckoutSessionAction
{
    public function handle(int $unitAmount, string $currency): Session
    {
        $currency = strtolower(trim($currency));
        $allowed = array_keys(config('packages.custom_payment.allowed_currencies', []));

        if (! in_array($currency, $allowed, true)) {
            throw new InvalidArgumentException('Please choose a supported currency.');
        }

        $isZeroDecimal = in_array(
            $currency,
            config('packages.custom_payment.zero_decimal_currencies', []),
            true
        );

        $minimum = $isZeroDecimal ? 1 : 100;
        $maximum = $isZeroDecimal ? 100000 : 10000000;

        if ($unitAmount < $minimum) {
            throw new InvalidArgumentException('Amount must be at least 1.00.');
        }

        if ($unitAmount > $maximum) {
            throw new InvalidArgumentException('Amount may not exceed 100,000.00.');
        }

        $secret = config('services.stripe.secret');

        if (blank($secret)) {
            throw new RuntimeException('Stripe is not configured. Please set STRIPE_SECRET in your environment.');
        }

        Stripe::setApiKey($secret);

        $currencyLabel = strtoupper($currency);

        return Session::create([
            'mode' => 'payment',
            'line_items' => [[
                'price_data' => [
                    'currency' => $currency,
                    'unit_amount' => $unitAmount,
                    'product_data' => [
                        'name' => 'Custom Payment',
                        'description' => "Custom amount payment ({$currencyLabel}) for Sphere Marketing Solutions",
                    ],
                ],
                'quantity' => 1,
            ]],
            'success_url' => route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel'),
            'allow_promotion_codes' => true,
            'billing_address_collection' => 'required',
            'metadata' => [
                'package' => 'custom',
                'package_name' => 'Custom Payment',
                'amount_cents' => (string) $unitAmount,
                'currency' => $currency,
            ],
        ]);
    }
}
