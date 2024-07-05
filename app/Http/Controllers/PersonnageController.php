<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\Project;

class PersonnageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Project $project)
    {
        $personnages = Personnage::all();
    return view('projects.personnages.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        return view('projects.personnages.create', compact('project'));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'backstory' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $personnage = new Personnage();
        $personnage->name = $request->name;
        $personnage->role = $request->role;
        $personnage->backstory = $request->backstory;
        $personnage->project_id = $project->id;

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('personnages', 'public');
            $personnage->photo = $imagePath;
        }

        $personnage->save();

        return redirect()->route('projects.personnages', $project->id)->with('success', 'Personnage created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $personnage = Personnage::find($id);
        return view('projects.personnages.show')->with('personnages', $personnage);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personnage = Personnage::find($id);
        return view('projects.personnages.edit')->with('personnages', $personnage);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $personnage = Personnage::find($id);
        $input = $request->all();
        $personnage->update($input);
        return redirect('personnage')->with('flash_message', 'personnage Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Personnage::destroy($id);
        return redirect('personnage')->with('flash_message', 'Personnage deleted!');  
    }
}
