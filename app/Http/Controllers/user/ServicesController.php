<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }
}
