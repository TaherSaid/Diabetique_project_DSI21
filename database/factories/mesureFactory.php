<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mesure;
use App\Model;
use App\profile;
use Faker\Generator as Faker;

$factory->define(mesure::class, function (Faker $faker) {
    return [
        'val'=>$faker->randomFloat(1,7),
        'mesure_profile_id' => profile::get('id')->random(),
    ];
});

