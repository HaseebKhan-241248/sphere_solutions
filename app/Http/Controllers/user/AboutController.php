<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about', [
            'about' => About::current(),
        ]);
    }
}
