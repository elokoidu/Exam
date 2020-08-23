<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'nimi' => $faker->sentence(2),
        'hind' => $faker->numberBetween($min = 50, $max = 500),
        'tootekood' => $faker->ean13,
        'tootefoto' => $faker->imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false),
        'näitajad' => $faker->sentence,
        'tootja' => $faker->randomElement(['Asus', 'Samsung', 'Toshiba', 'Philips', 'Logitech']),
        'kategooria' => $faker->randomElement(['Monitor', 'Lisatarvikud', 'Emaplaat', 'Kõvaketas', 'Graafikakaart']),
    ];
});
