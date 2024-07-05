<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    $project = new Project();
    $project->name = $request->name;
    $project->description = $request->description;
    $project->user_id = Auth::id(); // Set the user_id to the currently authenticated user's ID
    $project->save();

    return redirect()->route('projects.index')->with('success', 'Project created successfully.');
}


public function show($id)
{
    $project = Project::find($id);;
    return view('projects.show', compact('project'));
}
public function showScenarios($id)
    {
        $project = Project::with('scenarios')->findOrFail($id);
        return view('projects.scenarios', compact('project'));
    }
    public function showPersonnages($id)
    {
        $project = Project::with('personnages')->findOrFail($id);
        return view('projects.personnages', compact('project'));
    }
    public function showStoryboard($id)
    {
        $project = Project::with('storyboard')->findOrFail($id);
        return view('projects.storyboard', compact('project'));
    }
    public function showEnvironments($id)
    {
        $project = Project::with('environments')->findOrFail($id);
        return view('projects.environments', compact('project'));
    }
    public function showObjects($id)
    {
        $project = Project::with('objects')->findOrFail($id);
        return view('projects.objects', compact('project'));
    }
            public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('projects', $project);
    }
           public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}


