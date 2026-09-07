<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ServiceItem;
use App\Models\ServicePage;

class ServicesController extends Controller
{
    public function index()
    {
        return view('pages.services', [
            'servicesPage' => ServicePage::current(),
            'serviceItems' => ServiceItem::query()->active()->ordered()->get(),
        ]);
    }
}
