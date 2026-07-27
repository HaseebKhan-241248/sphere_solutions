<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ProjectsDetailsAlt;
use Illuminate\Http\Request;

class ProjectsDetailsAltController extends Controller
{
    public function index()
    {
        return view('pages.project-details-alt');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ProjectsDetailsAlt $projectsDetailsAlt)
    {
        //
    }

    public function edit(ProjectsDetailsAlt $projectsDetailsAlt)
    {
        //
    }

    public function update(Request $request, ProjectsDetailsAlt $projectsDetailsAlt)
    {
        //
    }

    public function destroy(ProjectsDetailsAlt $projectsDetailsAlt)
    {
        //
    }
}
