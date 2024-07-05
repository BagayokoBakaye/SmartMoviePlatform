<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Scenario;
use Illuminate\Http\Request;

class ScenariosController extends Controller
{
    public function index(Project $project){
        return view('projects.scenarios.index', compact('project'));

    }
    public function create(Project $project)
    {
        return view('projects.scenarios.create', compact('project'));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $scenario = new Scenario();
        $scenario->title = $request->title;
        $scenario->description = $request->description;
        $scenario->project_id = $project->id;
        $scenario->save();

        return redirect()->route('projects.scenarios', $project->id)->with('success', 'Scenario created successfully.');
    }
}

