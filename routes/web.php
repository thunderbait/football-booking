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
Route::get('/', function () {return view('index');});

Route::get('/partners', 'PartnerController@index');

Route::get('/about', function () {return view('about');});

Route::get('/pricing', function () {return view('pricing');});

// Pitch Actions - CRUD

// show all pitches
Route::get('/pitches', 'PitchController@index');
// show a specific pitch
Route::get('/pitches/show/', 'PitchController@show');
// edit route for a pitch - show edit form
Route::get('/pitches/{pitch}/edit', 'PitchController@edit');
// update route - handling the submission from the edit form
Route::put('/pitches/{pitch}', 'PitchController@update');
// destroy route - remove the model from the db
Route::delete('/pitches/{pitch}', 'PitchController@destroy');

// Reservation Actions - CRUD

// show all reservations
Route::get('/reservations', 'ReservationController@index');
// show a specific reservation
Route::get('/reservations/show/', 'ReservationController@show');
// edit route for a reservation - show edit form
Route::get('/reservations/{reservation}/edit', 'ReservationController@edit');
// update route - handling the submission from the edit form
Route::put('/reservations/{reservation}', 'ReservationController@update');
// destroy route - remove the model from the db
Route::delete('/reservations/{reservation}', 'ReservationController@destroy');

// Timeslot Actions - CRUD

// show all timeslots
Route::get('/timeslots', 'TimeslotController@index');
// show a specific timeslot
Route::get('/timeslots/show/', 'TimeslotController@show');
// edit route for a timeslot - show edit form
Route::get('/timeslots/{timeslot}/edit', 'TimeslotController@edit');
// update route - handling the submission from the edit form
Route::put('/timeslots/{timeslot}', 'TimeslotController@update');
// destroy route - remove the model from the db
Route::delete('/timeslots/{timeslot}', 'TimeslotController@destroy');
