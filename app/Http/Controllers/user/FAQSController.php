<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\FAQS;
use Illuminate\Http\Request;

class FAQSController extends Controller
{
    public function index()
    {
        return view('pages.faqs');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(FAQS $fAQS)
    {
        //
    }

    public function edit(FAQS $fAQS)
    {
        //
    }

    public function update(Request $request, FAQS $fAQS)
    {
        //
    }

    public function destroy(FAQS $fAQS)
    {
        //
    }
}
