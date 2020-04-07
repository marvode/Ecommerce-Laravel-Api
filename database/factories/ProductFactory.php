<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $img = [
        './img/download.jpeg',
        './img/Screenshot-2.png',
        './img/Screenshot-3.png',
    ];

    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1), 
        'quantity' => $faker->numberBetween(1, 10),
        'status' => $faker->randomElement([Product::AVAILABLE_PRODUCT, Product::UNAVAILABLE_PRODUCT]),
        'img_path' => $faker->randomElement($img),
        'seller_id' => User::all()->random()->id,

        // User::inRandomOrder()->first()->id

    ];
});
