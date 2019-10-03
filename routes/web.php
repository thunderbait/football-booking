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

//todo
// make routes/filters for pitch browsing (city/type/size)

// something similar to UNIQUE CONSTRAINT with timeslot and pitch to prevent double booking

Route::get('/', function () {
    return view('index');
});

Route::resource('pitches', 'PitchController'); //CRUD for Pitches

Route::resource('timeslots', 'TimeslotController'); //CRUD for Timeslots

Route::resource('partners', 'PartnerController'); // CRUD for Partners

Route::resource('reservations', 'ReservationController'); // CRUD for Reservations

Route::get('cities/{city}', 'PitchController@showCities')->name('cities'); // Browse Cities

Route::get('sizes/{size}', 'PitchController@showSize')->name('sizes'); // Browse Sizes

Route::get('type/{type}', 'PitchController@showTypes')->name('types'); // Browse Types

Route::get('pitches/show', 'PitchController@show'); //Show all pitches

Route::get('/pricing', function () { return view('pricing/index');});

Route::get('/about', function () { return view('about/index');});