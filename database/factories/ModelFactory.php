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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Laravel\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Laravel\Product::class, function (Faker\Generator $faker) {
	return [
	    'unique_identifier' => $faker->uuid,
	    'prefix_code' => $faker->numerify('aen'),
	    'category' => $faker->numberBetween($min = 0, $max = 10),
	    'name' => $faker->word,
	    'description' => $faker->paragraph,
	    'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 400),
	    'image' => 'http://mobiletesting.dx.am/moonshine_sessions/img/gigantic-logo.png',
	];
});
