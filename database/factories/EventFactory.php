<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'name' => $faker->name,
        'date' => $faker->date,
        'categorie' => $faker->randomElement($array = array ('party','courses','theater','cinema','concert','tournament','exhibition')),
        'poster' => $faker->text,
        'address' => $faker->address,
        'description' => $faker->text,
        'time' => $faker->time
    ];
});
