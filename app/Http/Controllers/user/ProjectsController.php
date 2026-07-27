<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('pages.projects');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Projects $projects)
    {
        //
    }

    public function edit(Projects $projects)
    {
        //
    }

    public function update(Request $request, Projects $projects)
    {
        //
    }

    public function destroy(Projects $projects)
    {
        //
    }
}
