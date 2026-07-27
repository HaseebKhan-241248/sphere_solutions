<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(About $about)
    {
        //
    }

    public function edit(About $about)
    {
        //
    }

    public function update(Request $request, About $about)
    {
        //
    }

    public function destroy(About $about)
    {
        //
    }
}
