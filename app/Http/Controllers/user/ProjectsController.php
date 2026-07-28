<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('pages.projects');
    }
}
