<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1 , 10),
        'name'=>$faker->name,
        'type'=>$faker->randomElement(['final' ,'vize']),
        'desc'=>$faker->sentence,
        'time'=>$faker->randomElement([60 ,90 ,120])

    ];
});
