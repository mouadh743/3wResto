<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Meal;
use Faker\Generator as Faker;

$factory->define(Meal::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'photo' => $faker->imageUrl(640, 480, 'food'),
        'description' => $faker->paragraph(),
        'quantity_in_stock' => $faker->randomDigitNotNull,
        'price_buy' => $faker->randomFloat(2,0, 99999),
        'price_sale' => $faker->randomFloat(2,0, 99999),
        'created_at' => now(),
    ];
});
