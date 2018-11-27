<?php

use Faker\Generator as Faker;

$factory->define(App\Application::class, function (Faker $faker) {
    return [
        'name' => 'Înregistrare vehicule',
        'description' => 'Aplicație pentru generarea numerelor de înregistrare a vehiculelor neînmatriculabile',
        'path' => 'vehicles',
    ];
});
