<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class RefundPolicyController extends Controller
{
    function index()
    {
        return view('pages.refund-policy');
    }
}
