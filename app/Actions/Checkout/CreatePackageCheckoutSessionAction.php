<?php

namespace App\Actions\Checkout;

use InvalidArgumentException;
use RuntimeException;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CreatePackageCheckoutSessionAction
{
    public function handle(string $packageKey): Session
    {
        $plan = config("packages.plans.{$packageKey}");

        if (! is_array($plan) || empty($plan['checkout'])) {
            throw new InvalidArgumentException('This package is not available for checkout.');
        }

        $secret = config('services.stripe.secret');

        if (blank($secret)) {
            throw new RuntimeException('Stripe is not configured. Please set STRIPE_SECRET in your environment.');
        }

        Stripe::setApiKey($secret);

        $currency = strtolower((string) config('packages.currency', 'cad'));
        $lineItem = $this->buildLineItem($plan, $currency);

        return Session::create([
            'mode' => 'payment',
            'line_items' => [$lineItem],
            'success_url' => route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel'),
            'allow_promotion_codes' => true,
            'billing_address_collection' => 'required',
            'metadata' => [
                'package' => $packageKey,
                'package_name' => $plan['name'],
            ],
        ]);
    }

    /**
     * @param  array<string, mixed>  $plan
     * @return array<string, mixed>
     */
    private function buildLineItem(array $plan, string $currency): array
    {
        if (! empty($plan['stripe_price_id'])) {
            return [
                'price' => $plan['stripe_price_id'],
                'quantity' => 1,
            ];
        }

        if (empty($plan['amount_cents'])) {
            throw new InvalidArgumentException('Package price is not configured.');
        }

        $productData = [
            'name' => $plan['name'],
        ];

        if (! empty($plan['tagline'])) {
            $productData['description'] = $plan['tagline'];
        }

        return [
            'price_data' => [
                'currency' => $currency,
                'unit_amount' => (int) $plan['amount_cents'],
                'product_data' => $productData,
            ],
            'quantity' => 1,
        ];
    }
}
