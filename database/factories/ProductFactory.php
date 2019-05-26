<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'featured_img' => $faker->url,
        'title' => $faker->name,
        'description' =>$faker->paragraph,
        'price' =>$faker->numberBetween(12300,50000),
        'discount' =>'Yes',
        'published' =>$faker->date,
        'status' =>$faker->randomElement(['For Sale', 'Sold', 'Not for Sale']),
    ];


});
