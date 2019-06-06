<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {
        $projects = \App\Project::all();
        return view('projects.index',['projects'=>$projects]);
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }

    public function edit(Project $project) {
        // below statement is shorthand for: return view('projects.edit', ['project'=>$project]);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');        
    }

    public function destroy($id) {
        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }

    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }
}
