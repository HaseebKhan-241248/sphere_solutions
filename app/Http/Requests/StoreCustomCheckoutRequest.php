<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomCheckoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'amount' => ['required', 'numeric', 'min:1', 'max:100000'],
        ];
    }

    public function messages(): array
    {
        return [
            'amount.required' => 'Please enter an amount.',
            'amount.numeric' => 'Please enter a valid amount.',
            'amount.min' => 'Amount must be at least $1.00.',
            'amount.max' => 'Amount may not exceed $100,000.00.',
        ];
    }

    public function amountCents(): int
    {
        return (int) round(((float) $this->input('amount')) * 100);
    }
}
