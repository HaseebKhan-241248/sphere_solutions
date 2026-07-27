<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Errors;
use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    public function index()
    {
        return view('pages.errors-404');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Errors $errors)
    {
        //
    }

    public function edit(Errors $errors)
    {
        //
    }

    public function update(Request $request, Errors $errors)
    {
        //
    }

    public function destroy(Errors $errors)
    {
        //
    }
}
