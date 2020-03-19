<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;
use App\User;
$factory->define(Note::class, function (Faker $faker) {

    $count = User::count();
    $user_id = rand(1,$count);

    return [
        'title' => $faker->sentence(2,true),
        'description' =>$faker->sentence(6,true),
        'user_id' => $user_id
    ];
});
