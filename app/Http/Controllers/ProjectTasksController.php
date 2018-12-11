<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{
    public function update(Task $task){
   		
      /*
      if (request()->has('completed'))
      {
        $task->complete();
      }
      else {
        $task->incomplete();
      }*/

      // request()->has('completed') ? $task->complete() : $task->incomplete();


      /*
      $task->update([
   			'completed' => request()->has('completed')
   		]);*/

      $method = request()->has('completed') ? 'complete' : 'incomplete';
      
      $task->$method();

   		return back();
    }


    public function store(Project $project)
    {	

      //this is the preferred method 
    	$attributes= request()->validate(['description'=>'required']);
    	$project->addTask($attributes);
    	return back();


      /* or

      Task::create ([
        'project_id' => $project->id,
        'description' => request('description')
      ]);

      */

    }
}
