<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Environment;

class EnvironmentsController extends Controller
{
    public function index(Project $project){
        return view('projects.environments.index',compact('project'));
    }

    public function create(Project $project)
    {
        return view('projects.environments.create', compact('project'));
    }
    public function store(Request $request, Project $project)
{
   

    $environment = new Environment();
    $environment->name = $request->name;
    $environment->description = $request->description;
    $environment->project_id = $project->id;

    if ($request->hasFile('image_path')) {
        $imagePath = $request->file('image_path')->store('environments', 'public');
        $environment->image_path = $imagePath;
    }

    $environment->save();

    return redirect()->route('projects.environments', $project->id)->with('success', 'Environment created successfully.');
}

public function update(Request $request, Project $project, Environment $environment)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $environment->name = $request->name;
    $environment->description = $request->description;

    if ($request->hasFile('image_path')) {
        // Delete old image
        if ($environment->image_path) {
            Storage::delete('public/' . $environment->image_path);
        }
        $imagePath = $request->file('image_path')->store('environments', 'public');
        $environment->image_path = $imagePath;
    }

    $environment->save();

    return redirect()->route('projects.show', $project->id)->with('success', 'Environment updated successfully.');
}

}
