<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ServicesDetailsController extends Controller
{
    public function index()
    {
        return view('pages.service-details');
    }
}
