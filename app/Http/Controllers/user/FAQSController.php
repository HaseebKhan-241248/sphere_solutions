<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class FAQSController extends Controller
{
    public function index()
    {
        return view('pages.faqs');
    }
}
