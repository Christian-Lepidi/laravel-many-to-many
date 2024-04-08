<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $project = new Project();
        $project->title = $data["title"];
        $project->description = $data["description"];
        $project->date_of_publication = $data["date_of_publication"];
        $project->save();
        return redirect()->route("projects.show", $project);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     
     */
    public function edit(Project $project)
    {
        return view("projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->update($data);

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     
     */
    public function destroy($id)
    {
        //
    }
}
