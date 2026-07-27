<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        return view('pages.testimonials');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Testimonials $testimonials)
    {
        //
    }

    public function edit(Testimonials $testimonials)
    {
        //
    }

    public function update(Request $request, Testimonials $testimonials)
    {
        //
    }

    public function destroy(Testimonials $testimonials)
    {
        //
    }
}
