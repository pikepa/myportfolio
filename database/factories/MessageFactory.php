<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'subject' => $faker->sentence,
        'content' => $faker->paragraph, ];
});
