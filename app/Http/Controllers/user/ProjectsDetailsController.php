<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ProjectsDetails;
use Illuminate\Http\Request;

class ProjectsDetailsController extends Controller
{
    public function index()
    {
        return view('pages.project-details');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ProjectsDetails $projectsDetails)
    {
        //
    }

    public function edit(ProjectsDetails $projectsDetails)
    {
        //
    }

    public function update(Request $request, ProjectsDetails $projectsDetails)
    {
        //
    }

    public function destroy(ProjectsDetails $projectsDetails)
    {
        //
    }
}
