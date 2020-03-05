<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

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

$factory->define(\TopDigital\Places\Models\Place::class, function (Faker $faker) {
    return [
        'name' => $faker->domainName,
        'address' => $faker->address,
        'location' => [$faker->latitude, $faker->longitude],
        'description' => $faker->sentence,
        'preview_url' => $faker->imageUrl(),
        'phones' => [
            '+7'. $faker->randomNumber(10),
            '+7'. $faker->randomNumber(10)
        ],
        'timetable' => [
            [
                'days' => [1,2,3,4,5],
                'ranges' => [
                    ['09:00', '14:00'],
                    ['15:00', '20:00'],
                ],
            ],
            [
                'days' => [6],
                'ranges' => [
                    ['11:00', '14:00'],
                    ['15:00', '18:00'],
                ],
            ],
        ],
    ];
});
