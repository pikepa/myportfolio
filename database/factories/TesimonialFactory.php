<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'client_name' => $faker->name,
        'country' => $faker->country,
        'story' =>$faker->paragraph,
        'img_name' =>$faker->name,
        'approved' =>'Yes',
        'owner_id' => function(){
            return factory(App\User::class)->create()->id;
        }    
    ];


});
