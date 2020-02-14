<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Seriya;
use Faker\Generator as Faker;

$factory->define(Seriya::class, function (Faker $faker) {

    return [
        'serial_id' => $faker->randomDigitNotNull,
        'season_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
