<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntrepreneurSignup extends Model
{
    protected $fillable = [
        'name',
        'email',
        'location',
        'main_skill',
        'additional_skills',
        'portfolio_url',
        'message',
        'consent',
        'submitted_from',
    ];

    protected function casts(): array
    {
        return [
            'consent' => 'boolean',
        ];
    }
}
