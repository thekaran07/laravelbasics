
@extends('projects.layout')
@section('title', 'Home Page')
@section('showContent')
<div class = "container   col-sm-8 ">
    <li class="list-group-item list-group-item-primary " style="text-align: center">Project  </li>
      <ul class="list-group">
        @foreach ($projects as $project)
          <a href = "/projects/{{ $project->id }}"><li class="list-group-item">{{$project->title}} </li> </a>
        @endforeach
      </ul>
      <a class="nav-item nav-link active" href = "/projects/create"> Create a new project</a>
</div>
@endsection