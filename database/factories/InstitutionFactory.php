<?php

use Faker\Generator as Faker;

$factory->define(App\Institution::class, function (Faker $faker) {
    return [
        'cif' => '4326760',
        'name' => 'comuna fundu moldovei',
        'active' => false,
        'terms_and_conditions' => true
    ];
});
