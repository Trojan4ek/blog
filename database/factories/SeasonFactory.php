<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Season;
use Faker\Generator as Faker;

$factory->define(Season::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'start' => $faker->randomDigitNotNull,
        'finish' => $faker->randomDigitNotNull,
        'serial_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
