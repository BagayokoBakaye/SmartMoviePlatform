<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Storyboard;
use Illuminate\Http\Request;

class StoryboardController extends Controller
{
    public function index(Project $project){
        $projects = Project::all();
        return view('projects.storyboards.index',compact('project'));
    }
    public function create(Project $project)
    {
        return view('projects.storyboards.create', compact('project'));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $storyboard = new Storyboard();
        $storyboard->title = $request->title;
        $storyboard->description = $request->description;
        $storyboard->project_id = $project->id;
        $storyboard->save();

        return redirect()->route('projects.storyboards', $project->id)->with('success', 'Storyboard created successfully.');
    }

    public function show(Project $project, Storyboard $storyboard)
    {
        return view('projects.storyboards.show', compact('project', 'storyboard'));
    }

    public function edit(Project $project, Storyboard $storyboard)
    {
        return view('projects.storyboards.edit', compact('project', 'storyboard'));
    }

    public function update(Request $request, Project $project, Storyboard $storyboard)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $storyboard->update($request->all());

        return redirect()->route('projects.show', $project->id)->with('success', 'Storyboard updated successfully.');
    }
}

