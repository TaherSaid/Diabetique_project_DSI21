<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\qcms;
use Faker\Generator as Faker;

$factory->define(qcms::class, function (Faker $faker) {
    return [
        'question'=>$faker->sentence,
        'score'=>$faker->randomDigit(1,100),
    ];
});
