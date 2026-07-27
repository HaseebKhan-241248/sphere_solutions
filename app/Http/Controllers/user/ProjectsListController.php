<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ProjectsList;
use Illuminate\Http\Request;

class ProjectsListController extends Controller
{
    public function index()
    {
        return view('pages.projects-list');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ProjectsList $projectsList)
    {
        //
    }

    public function edit(ProjectsList $projectsList)
    {
        //
    }

    public function update(Request $request, ProjectsList $projectsList)
    {
        //
    }

    public function destroy(ProjectsList $projectsList)
    {
        //
    }
}
