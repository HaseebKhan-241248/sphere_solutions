<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class TermsConditionsController extends Controller
{
    function index()
    {
        return view('pages.terms-conditions');
    }
}
