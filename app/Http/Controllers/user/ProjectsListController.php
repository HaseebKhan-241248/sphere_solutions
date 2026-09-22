<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ProjectsListController extends Controller
{
    /**
     * /projects-list is a near-identical layout of /projects; consolidate with a 301.
     */
    public function index(): RedirectResponse
    {
        return redirect()->route('projects', status: 301);
    }
}
