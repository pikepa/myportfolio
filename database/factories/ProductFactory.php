<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'featured_img' => $faker->url,
        'title' => $faker->name,
        'description' =>$faker->paragraph,
        'status' =>$faker->randomElement(['For Sale', 'Sold', 'Not for Sale']),
        'price' =>$faker->numberBetween(12300, 50000),
        'discount' =>'Yes',
        'likes' =>$faker->numberBetween(10, 50),
        'publish_at' =>$faker->date,
    ];
});
