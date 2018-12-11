@extends('projects.layout')
@section('title', 'Edit Page')
@section ('showContent')
 <div class = "container   col-sm-8  ">
  <li class="list-group-item list-group-item-primary " style="text-align: center">Update the project  </li>
      <form method="POST" action="/projects/{{ $project->id }}"> 
        @csrf
        @method('PATCH')
        <div class="form-group " >
          <label>Title </label>
          <input  class="form-control" name = "title" value = "{{$project->title}}">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea class="form-control" name = "description"> {{ $project->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update project</button>

      </form>
      <br>
      <form method = "POST" action = "/projects/{{ $project->id }}">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-primary">Delete project</button>
      </form>

        <a class="nav-item nav-link active" href="/projects">Home</a>
  </div>
  @endsection