<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomCheckoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('currency')) {
            $this->merge([
                'currency' => strtolower(trim((string) $this->input('currency'))),
            ]);
        }
    }

    public function rules(): array
    {
        return [
            'amount' => ['required', 'numeric', 'min:1', 'max:100000'],
            'currency' => [
                'required',
                'string',
                'size:3',
                Rule::in(array_keys(config('packages.custom_payment.allowed_currencies', []))),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'amount.required' => 'Please enter an amount.',
            'amount.numeric' => 'Please enter a valid amount.',
            'amount.min' => 'Amount must be at least 1.00.',
            'amount.max' => 'Amount may not exceed 100,000.00.',
            'currency.required' => 'Please select a currency.',
            'currency.in' => 'Please choose a supported currency.',
        ];
    }

    public function currency(): string
    {
        return strtolower((string) $this->input(
            'currency',
            config('packages.custom_payment.default_currency', 'cad')
        ));
    }

    /**
     * Stripe unit_amount: cents for most currencies, whole units for zero-decimal.
     */
    public function unitAmount(): int
    {
        $amount = (float) $this->input('amount');

        if ($this->isZeroDecimalCurrency($this->currency())) {
            return (int) round($amount);
        }

        return (int) round($amount * 100);
    }

    public function isZeroDecimalCurrency(?string $currency = null): bool
    {
        $currency = strtolower($currency ?? $this->currency());

        return in_array(
            $currency,
            config('packages.custom_payment.zero_decimal_currencies', []),
            true
        );
    }
}
