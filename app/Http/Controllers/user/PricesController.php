<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Prices;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    public function index()
    {
        return view('pages.prices');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Prices $prices)
    {
        //
    }

    public function edit(Prices $prices)
    {
        //
    }

    public function update(Request $request, Prices $prices)
    {
        //
    }

    public function destroy(Prices $prices)
    {
        //
    }
}
