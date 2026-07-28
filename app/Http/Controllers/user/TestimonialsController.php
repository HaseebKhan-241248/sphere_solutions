<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    public function index()
    {
        return view('pages.testimonials');
    }
}
