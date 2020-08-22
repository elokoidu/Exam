<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'nimi' => $faker->name,
        'hind' => $faker->numberBetween($min = 50, $max = 500),
        'tootekood' => $faker->numberBetween($min = 11111111, $max = 99999999),
        'tootefoto' => $faker->imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false),
        'tootja' => $faker->ean13,
        'kategooria' => $faker->randomElement(['Monitor', 'Lisatarvikud', 'Emaplaat', 'Kõvaketas', 'Graafikakaart']),
    ];
});
