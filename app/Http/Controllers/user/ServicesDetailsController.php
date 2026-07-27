<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ServicesDetails;
use Illuminate\Http\Request;

class ServicesDetailsController extends Controller
{
    public function index()
    {
        return view('pages.service-details');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ServicesDetails $servicesDetails)
    {
        //
    }

    public function edit(ServicesDetails $servicesDetails)
    {
        //
    }

    public function update(Request $request, ServicesDetails $servicesDetails)
    {
        //
    }

    public function destroy(ServicesDetails $servicesDetails)
    {
        //
    }
}
