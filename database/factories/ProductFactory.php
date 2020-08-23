<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'nimi' => $faker->word,
        'hind' => $faker->numberBetween($min = 50, $max = 500),
        'tootekood' => $faker->ean13,
        'tootefoto' => $faker->imageUrl($width = 700, $height = 700, $category = null, $randomize = true, $word = null, $gray = false),
        'näitajad' => $faker->sentence(25),
        'tootja' => $faker->company,
        'kategooria' => $faker->randomElement(['Monitor', 'Lisatarvikud', 'Emaplaat', 'Kõvaketas', 'Graafikakaart']),
        'slug' => $faker->slug,
    ];
});
