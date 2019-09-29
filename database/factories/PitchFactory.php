<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pitch;
use Faker\Generator as Faker;

$factory->define(Pitch::class, function (Faker $faker) {
    return [
        'name'=> $name = $faker->sentence,
        'location'=> ['Nicosia','Larnaca','Limassol','Famagusta','Paphos'][rand(0,4)],
        'size'=> ['5x5','7x7','11x11'][rand(0,2)],
        'type'=> ['Grass','Astro','3G'][rand(0,2)],
    ];
});
