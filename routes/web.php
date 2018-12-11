<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');		
/*Route::get('/projects', 'ProjectsController@index'); //fetch me all projects
Route::get('/projects/create', 'ProjectsController@create'); //fetch me a form to create project
Route::get('/projects/{project}','ProjectsController@show'); // display that project
Route::post('/projects', 'ProjectsController@store'); //Store a new project
Route::get('/projects/{project}/edit','ProjectsController@edit'); //get me a form to edit that project
Route::patch('/projects/{project}','ProjectsController@update'); //update the edited form project
Route::delete('/projects/{project}','ProjectsController@destroy');//delete that project*/


Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');