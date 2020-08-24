<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween($min = 50, $max = 500),
        'code' => $faker->ean13,
        'details' => $faker->sentence(50),
        'image' => $faker->imageUrl($width = 700, $height = 700, $category = null, $randomize = true, $word = null, $gray = false),
        'manufacturer' => $faker->company,
        'category' => $faker->randomElement(['Monitor', 'Lisatarvikud', 'Emaplaat', 'Kõvaketas', 'Graafikakaart']),

        'slug' => $faker->slug,
    ];
});
