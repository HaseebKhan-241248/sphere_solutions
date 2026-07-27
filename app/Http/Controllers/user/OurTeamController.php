<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        return view('pages.our-team');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(OurTeam $ourTeam)
    {
        //
    }

    public function edit(OurTeam $ourTeam)
    {
        //
    }

    public function update(Request $request, OurTeam $ourTeam)
    {
        //
    }

    public function destroy(OurTeam $ourTeam)
    {
        //
    }
}
