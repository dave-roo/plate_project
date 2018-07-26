<?php

use Faker\Generator as Faker;

$factory->define(App\Customeractivity::class, function (Faker $faker) {
    return [
        'table' => $faker->table,
    ];
});
