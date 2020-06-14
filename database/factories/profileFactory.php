<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(profile::class, function (Faker $faker) {
    return [
        'dateNaissance'=>$faker->date('1980-1-1','now'),
        'description'=>$faker->sentence,
        'etat'=>$faker->randomElement($array = array('personne diabetique ', 'compte pour suivre autre personne','compte pour suivie personnel et autre personne ')),
        'etreDiabetique'=>$faker->numberBetween(0,1),
        'user_id'=>User::get('id')->random(),
    ];
});
