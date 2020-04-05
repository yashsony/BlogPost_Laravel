<?php
use Faker\Generator as Faker;
$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'Post_title' => $faker->sentence,
        'Post_author' => $faker->sentence,
        'price' => $faker->randomDigit,
        'phone_no' =>$faker->phoneNumber, 


    ];
});