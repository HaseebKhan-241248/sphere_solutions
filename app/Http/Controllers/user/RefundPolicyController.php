<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\View\View;

class RefundPolicyController extends Controller
{
    public function index(): View
    {
        return view('pages.policy', [
            'title' => 'Refund Policy',
            'content' => Setting::getValue(Setting::REFUND_POLICY),
        ]);
    }
}
