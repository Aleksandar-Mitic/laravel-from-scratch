<?php

namespace BasicLaravel\Http\Controllers;

use BasicLaravel\Mail\ProjectCreated;
use BasicLaravel\Project;
use BasicLaravel\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title'       => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:10'],
        ]);

        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        \Mail::to($project->user->email)->send(

            new ProjectCreated($project)
        );

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // Migrated to ProjectPolicy.php
        // if ($project->owner_id !== auth()->id()) {
        //     abort(403);
        // }

        $this->authorize('view', $project);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        $attributes = request()->validate([
            'title'       => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:10'],
        ]);

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        // return view('projects.show');
        return redirect('/projects');
    }
}
