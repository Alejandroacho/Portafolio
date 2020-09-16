<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('project.index', ['projects'=>$projects]);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return redirect(route('project.index'));
    }

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        //
    }

    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        //
    }
}
