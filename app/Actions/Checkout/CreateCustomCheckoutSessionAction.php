<?php

namespace App\Actions\Checkout;

use InvalidArgumentException;
use RuntimeException;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CreateCustomCheckoutSessionAction
{
    public function handle(int $amountCents): Session
    {
        if ($amountCents < 100) {
            throw new InvalidArgumentException('Amount must be at least $1.00.');
        }

        if ($amountCents > 10000000) {
            throw new InvalidArgumentException('Amount may not exceed $100,000.00.');
        }

        $secret = config('services.stripe.secret');

        if (blank($secret)) {
            throw new RuntimeException('Stripe is not configured. Please set STRIPE_SECRET in your environment.');
        }

        Stripe::setApiKey($secret);

        $currency = strtolower((string) config('packages.currency', 'usd'));

        return Session::create([
            'mode' => 'payment',
            'line_items' => [[
                'price_data' => [
                    'currency' => $currency,
                    'unit_amount' => $amountCents,
                    'product_data' => [
                        'name' => 'Custom Payment',
                        'description' => 'Custom amount payment for Sphere Marketing Solutions',
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
                'amount_cents' => (string) $amountCents,
            ],
        ]);
    }
}
