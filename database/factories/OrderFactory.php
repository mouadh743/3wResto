<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id'=>User::get('id')->random(),
        'total_amount'=>$faker->randomFloat(2,0,99999),
        'tax_amount'=>$faker->randomFloat(2,0,99999),
        'tax_rate'=>$faker->randomFloat(2,0,99999),
        'created_at' => now(),
    ];
});
