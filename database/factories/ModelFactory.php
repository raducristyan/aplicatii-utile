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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Institution::class, function (Faker\Generator $faker) {
    return [
        'cif' => '4326760',
        'name' => 'comuna fundu moldovei',
        'active' => true,
    ];
});

$factory->define(App\Application::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Înregistrare vehicule',
        'short_name' => 'i-v',
        'slug' => 'inregistrare-vehicule',
        'description' => 'Aplicație pentru generarea numerelor de înregistrare vehiculelor neînmatriculabile',
    ];
});
