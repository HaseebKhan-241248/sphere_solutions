<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ProjectsListController extends Controller
{
    public function index()
    {
        return view('pages.projects-list');
    }
}
