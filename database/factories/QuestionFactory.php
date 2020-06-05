<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'lesson_id'=>$faker->numberBetween(1,5),
        'body'=>$faker->text,
        'answer_1'=>$faker->sentence ,
        'answer_2'=>$faker->sentence ,
        'answer_3'=>$faker->sentence ,
        'answer_4'=>$faker->sentence ,
//        'correct'=>$faker->sentence ,
    ];
});
