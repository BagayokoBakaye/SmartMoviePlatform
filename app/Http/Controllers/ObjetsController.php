<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Objet;

class ObjetsController extends Controller
{
    public function index(Project $project){
        return view('projects.objects.index',compact('project'));
    }

    public function create(Project $project)
    {
        return view('projects.objects.create', compact('project'));
    }
    public function store(Request $request, Project $project)
{
   

    $object = new Objet();
    $object->name = $request->name;
    $object->description = $request->description;
    $object->project_id = $project->id;

    if ($request->hasFile('image_path')) {
        $imagePath = $request->file('image_path')->store('objects', 'public');
        $object->image_path = $imagePath;
    }

    $object->save();

    return redirect()->route('projects.objects', $project->id)->with('success', 'Environment created successfully.');
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
