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

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entities\Notification::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'type' => array_rand(['info','success','warning','error']),
        'body' => $faker->paragraph(),
        'user_id' => \App\Entities\User::all()->random()->id
    ];
});
