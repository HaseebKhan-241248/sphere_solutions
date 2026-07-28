<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class PricesController extends Controller
{
    public function index()
    {
        return view('pages.prices');
    }
}
