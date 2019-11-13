<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'ProjectID' => $faker->numberBetween($min = 1000, $max = 9000),
        'ProjectName' => $faker->catchPhrase,
        'DateOfStart' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'TeamSize' => $faker->numberBetween($min = 10, $max = 40),
    ];
});
