<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class FeaturesController extends Controller
{
    public function index()
    {
        return view('pages.features');
    }
}
