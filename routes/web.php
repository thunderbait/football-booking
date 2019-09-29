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

//HomePage
Route::get('/', function () {return view('home');});
//pitch Actions
// show all pitches
Route::get('/pitches', 'PitchController@showAll');
// show a specific pitch
// {} indicates a route paramater - see: https://laravel.com/docs/6.x/routing#route-parameters
Route::get('/pitches/cities/', 'PitchController@show');
// edit route for a pitch - show edit form
Route::get('/pitches/{pitch}/edit', 'PitchController@edit');
// update route - handling the submission from the edit form
Route::put('/pitches/{pitch}', 'PitchController@update');
// destroy route - remove the model from the db
Route::delete('/pitches/{pitch}', 'PitchController@destroy');

Route::get('/browse/city', 'PitchController@getCities');
