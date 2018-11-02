<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Car::class, function (Faker $faker) {
    $random = mt_rand(0,2);
    $CarsArray = array("Ford", "Honda", "Toyota");
    return [
        'make' => $CarsArray[$random],
        'model' => $faker->company,
        'year' => $faker->year,
        'year' => $faker->year($max = 'now'),
    ];
});
