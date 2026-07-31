<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\View\View;

class PrivacyPolicyController extends Controller
{
    public function index(): View
    {
        return view('pages.policy', [
            'title' => 'Privacy Policy',
            'content' => Setting::getValue(Setting::PRIVACY_POLICY),
        ]);
    }
}
