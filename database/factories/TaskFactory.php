<?php
use Faker\Generator as Faker;
$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'Book_title' => $faker->sentence,
        'Book_author' => $faker->sentence,
        'price' => $faker->randomDigit,
        'phone_no' =>$faker->phoneNumber, 


    ];
});