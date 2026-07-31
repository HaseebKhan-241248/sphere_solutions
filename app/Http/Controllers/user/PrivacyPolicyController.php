<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    function index()
    {
        return view('pages.privacy-policy');
    }
}
