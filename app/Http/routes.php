<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// set home route to index method of MoviesController
Route::get('/', 'MoviesController@index');


// Resource for Movie CRUD functionallity
Route::resource('movies', 'MoviesController',[
  'parameters' => 'singular'
]);
