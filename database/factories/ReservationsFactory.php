<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
    	'pitch_id'=> $faker->numberBetween($min = 1, $max = 20),
    	'user_id' =>  $faker->numberBetween($min = 1, $max = 200),
    	'timeslot' => $faker->numberBetween($min = 1, $max = 11),
    	'paidfor' =>  $faker->numberBetween($min = 0, $max = 1),
        //
    ];
});
