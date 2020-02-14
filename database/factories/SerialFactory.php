<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Serial;
use Faker\Generator as Faker;

$factory->define(Serial::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'path' => $faker->word,
        'start' => $faker->randomDigitNotNull,
        'finish' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
