<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\compteSuivie;
use App\mesure;
use App\Model;
use App\profile;
use Faker\Generator as Faker;

$factory->define(compteSuivie::class, function (Faker $faker) {
    return [
        'valMoyMesure'=>$faker->randomDigit(1,10),
        'suivieProfile_id'=>profile::get('id')->random(),

    ];
});
