<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Farmer;
use App\Models\Plant;
use App\Helpers\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::latest()->get();
        $farmer = Farmer::all();
        $plant = Plant::all();
        
        return view('Project.index', compact('project', 'farmer', 'plant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'superficie' => ['required'],
            'date_semis' => ['required', 'date', 'max:255'],
            'date_prise_contact' => ['required', 'date', 'max:255'],
            'plante_id' => ['required'],
            'agriculteur_id' => ['required'],
        ]);

        $project = Project::create($request->all());

        return redirect()->route('Project.index')
            ->with('success', 'New Project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('Project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('Project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'plante_id' => ['required'],
            'agriculteur_id' => ['required'],
        ]);

        $project->update($request->all());

        return redirect()->route('Project.index')
            ->with('success', 'Project updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('Project.index')
            ->with('success', 'Project deleted !');
    }
}