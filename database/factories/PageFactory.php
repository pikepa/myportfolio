<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'featured_img' => $faker->url,
        'title' => $faker->name(2),
        'name' => $faker->name(3),
        'slug' => 'asde-assde-asde',

    ];
});
