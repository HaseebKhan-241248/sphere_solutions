<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrepreneurSignupRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'location' => ['required', 'string', 'max:200'],
            'main_skill' => ['required', 'string', 'max:150'],
            'additional_skills' => ['nullable', 'string', 'max:500'],
            'portfolio_url' => ['nullable', 'string', 'max:500'],
            'message' => ['nullable', 'string', 'max:5000'],
            'consent' => ['accepted'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your full name.',
            'name.max' => 'Name may not be greater than 100 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'location.required' => 'Please enter your country or city.',
            'location.max' => 'Country / City may not be greater than 200 characters.',
            'main_skill.required' => 'Please enter your main skill.',
            'main_skill.max' => 'Main skill may not be greater than 150 characters.',
            'additional_skills.max' => 'Additional skills may not be greater than 500 characters.',
            'portfolio_url.max' => 'LinkedIn / Portfolio / Website may not be greater than 500 characters.',
            'message.max' => 'Message may not be greater than 5000 characters.',
            'consent.accepted' => 'Please agree to be contacted by Sphere Marketing Solutions.',
        ];
    }
}
