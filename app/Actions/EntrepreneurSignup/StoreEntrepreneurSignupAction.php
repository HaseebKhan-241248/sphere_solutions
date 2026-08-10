<?php

namespace App\Actions\EntrepreneurSignup;

use App\Models\EntrepreneurSignup;

class StoreEntrepreneurSignupAction
{
    public function handle(array $data, ?string $submittedFrom = null): EntrepreneurSignup
    {
        return EntrepreneurSignup::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'location' => $data['location'],
            'main_skill' => $data['main_skill'],
            'additional_skills' => $data['additional_skills'] ?? null,
            'portfolio_url' => $data['portfolio_url'] ?? null,
            'message' => $data['message'] ?? null,
            'consent' => true,
            'submitted_from' => $submittedFrom,
        ]);
    }
}
