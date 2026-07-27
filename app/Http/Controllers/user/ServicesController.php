<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Services $services)
    {
        //
    }

    public function edit(Services $services)
    {
        //
    }

    public function update(Request $request, Services $services)
    {
        //
    }

    public function destroy(Services $services)
    {
        //
    }
}
