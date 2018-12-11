
@extends('projects.layout')
@section('title', 'Show Page')
@section('showContent')
<br>
<div class = "container  card  col-sm-8 ">
    <li class="list-group-item list-group-item-primary " style="text-align: center">{{$project->title}} </li>
      <ul class="list-group">
         <li class="list-group-item"> {{$project->description}}</li>

<!--Existing tasks of the given project-->
     
         @if($project->tasks->count())
          <ul class="list-group">
          	<li class="list-group-item" style= "text-align: center">{{$project->title}} : TASKS</li>
	        
	        @foreach ($project->tasks as $task)
	        
	          <li class="list-group-item">
	          	
	          	<form method = "POST" action = "/tasks/{{ $task->id }}">
	          		@method ('PATCH')
	          		@csrf
	          		<label class = "checkbox {{ $task->completed ? 'is-complete' : ''}}" for="completed">
	          			<input type = "checkbox" name = "completed" onChange = "this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
	          				{{$task->description}}
	          		</label>
	          	</form> 
	          </li>
	        

	        @endforeach
	      </ul>
	      @endif
	   </ul>
	   <div class="row">
	   <div class="col">
	     	<a class="nav-item nav-link active btn btn-outline-primary"" href="/projects/{{$project->id}}/edit">Edit Project</a>
	    </div>
		</div>

<!--Create a new task of the given project-->
<br>
		<div class = "container card">
			<form method="POST" action="/projects/{{ $project->id }}/tasks"> 
				<ul class="list-group">
			        @csrf
			        <li class="list-group-item" style = "text-align: center;">
			        	<div class="form-group " >
			          		<label style>New Task </label>
			          		<input  class="form-control" }}" name = "description"  placeholder="New task description" value= "{{ old('title') }}" required>
			        	 </div>
			     	</li>
	

			        <button type="submit" class="btn btn-primary">Create new task</button>
		    	</ul>
	      	</form>
	      	 @include('errors')
		</div>


<br>
<div class="container">
	<div class ="row">
		<div class="col">
		      <a class="nav-item nav-link active btn btn-outline-success" href="/projects">Home</a>
		</div>
	</div>
</div>
@endsection