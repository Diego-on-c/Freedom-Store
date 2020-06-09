<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bunker;
use Faker\Generator as Faker;

$factory->define(Bunker::class, function (Faker $faker) {
    return [
        'name' => $faker -> city,
    ];
});
