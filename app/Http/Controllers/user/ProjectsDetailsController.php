<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ProjectsDetailsController extends Controller
{
    public function index()
    {
        return view('pages.project-details');
    }
}
