<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
        return view('pages.features');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Features $features)
    {
        //
    }

    public function edit(Features $features)
    {
        //
    }

    public function update(Request $request, Features $features)
    {
        //
    }

    public function destroy(Features $features)
    {
        //
    }
}
