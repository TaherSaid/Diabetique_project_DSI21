<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\comptePersonnel;
use App\Model;
use App\profile;
use Faker\Generator as Faker;

$factory->define(comptePersonnel::class, function (Faker $faker) {
    return [
        'personnel_profile_id'=>profile::get('id')->random(),
    ];
});
