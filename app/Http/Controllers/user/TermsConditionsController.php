<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\View\View;

class TermsConditionsController extends Controller
{
    public function index(): View
    {
        return view('pages.policy', [
            'title' => 'Terms & Conditions',
            'content' => Setting::getValue(Setting::TERMS_AND_CONDITIONS),
        ]);
    }
}
