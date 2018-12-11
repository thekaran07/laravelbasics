<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Project extends Model
{
   protected $fillable = [
    'title', 'description'
];	
    public function tasks()
    {
    	return $this->hasMany(Task::class);
    }


    public function addTask($task)
    {

    	//dd ($description);
    	$this->tasks()->create($task);

  
    	/*return Task::create([
			'project_id' => $this->id,
			'description' => $description 
    	]);
    	*/
    }
}
