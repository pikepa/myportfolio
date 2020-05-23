<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Page;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Auth;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'featured_img' => $faker->url,
        'title' => $faker->name(2),
        'name' => $faker->name(3),
        'slug' => 'asde-assde-asde',
        'owner_id' => Auth::id(),

    ];
});
