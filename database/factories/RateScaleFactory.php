<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RateScale;
use Faker\Generator as Faker;

$factory->define(RateScale::class, function (Faker $faker) {
    return [
        'label' => $faker->word,
        'description' => $faker->sentence
    ];
});
