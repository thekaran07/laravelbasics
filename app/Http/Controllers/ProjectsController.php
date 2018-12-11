<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    	{
    		$projects =  Project::all();	
    		return view('projects.index', compact('projects'));
    	}

    public function create()
    {
    	return view ('projects.create');
    }

    public function show(Project $project){
    	//$project = Project::findorFail($id);
    	
    	return view ('projects.show', compact ('project'));
    }

    public function edit(Project $project) //example.com/projects/1/edit
    {
    	//$project = Project::findorFail($id);

    	return view ('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {	
    	$project->update(request(['title','description']));
    	//$project = Project::findorFail($id);
    	/*$project->title = request ('title');
    	$project->description = request ('description');
    	$project->save();*/

    	return redirect ('/projects');
    }

    public function destroy(Project $project)
    {	
  
    	//$project = Project::findorFail($id);
    	$project->delete();

    	return redirect ('/projects');
    }

    public function store()
    {
    	$validatedAttributes = request()->validate([
    		'title' => ['required','min:3'],
    		'description' => ['required','min:5']
    	]);
    	Project::create($validatedAttributes);
    	/*$project = new Project();
    	$project->title = request ('title');
    	$project->description = request('description');
    	$project->save();*/

    	return redirect('/projects');
    }
}
