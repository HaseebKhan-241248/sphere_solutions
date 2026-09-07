<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'home' => Home::current(),
        ]);
    }
}
