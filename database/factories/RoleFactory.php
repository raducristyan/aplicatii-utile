dcup<?php

    use Faker\Generator as Faker;

    $factory->define(App\Role::class, function (Faker $faker) {
        return [
            'name' => 'admin'
        ];
    });

    $factory->state(App\Role::class, 'user', [
        'name' => 'user'
    ]);
