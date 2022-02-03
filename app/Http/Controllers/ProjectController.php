<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Models\TimeEntry;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientWithProject = Client::all();
      return view('projects.index',compact('clientWithProject'));
<<<<<<< HEAD
      
=======
>>>>>>> green/main
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clients = Client::all();
      $this->authorize('create', Project::class);
      return view('projects.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
      $this->authorize('create', Project::class);
      $project = Project::create($request->validated());
<<<<<<< HEAD
      return redirect()->route('projects.index')->with('message', 'Project Updated successfully!');
=======
      return redirect('projects')->with('message','Project Created Successfully!!');
>>>>>>> green/main
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
      return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
      $clients = Client::all();
      // return view('clients.index', compact('clients'));
      $this->authorize('update', $project);
      return view('projects.edit', compact('project','clients'));
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
      $this->authorize('update', $project);
      $project->update($request->validated());
      return redirect()->route('projects.index')->with('message', 'Project Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
      $this->authorize('delete', $project);
      $project->delete();
      return redirect()->route('projects.index')->with('message', 'Project Updated successfully!');

    }
}
