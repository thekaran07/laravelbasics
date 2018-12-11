@extends('projects.layout')
@section('title', 'Create Page')
@section ('showContent')
 <div class = "container   col-sm-8  ">
  <li class="list-group-item list-group-item-primary " style="text-align: center">Create a new Project  </li>
      <form method="POST" action="/projects"> 
        @csrf
        <div class="form-group " >
          <label>Title </label>
          <input  class="form-control" }}" name = "title"  placeholder="Title of the project" value= "{{ old('title') }}">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea class="form-control" name = "description" placeholder="Description of the project"> {{old('description')}} </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @include ('errors')
  </div>
  @endsection