<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ServiceItem;
use Illuminate\View\View;

class ServicesDetailsController extends Controller
{
    public function show(ServiceItem $service): View
    {
        abort_unless($service->is_active, 404);

        return view('pages.service-details', [
            'service' => $service,
            'allServices' => ServiceItem::query()->active()->ordered()->get(),
        ]);
    }
}
