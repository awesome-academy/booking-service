<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'room_number'=> str_random(3),
        'price' => rand(1, 100) * 1000,
        'title' => $faker->text(25),
        'description' => $faker->text(100),
        'status' => '1',
        'category_id' => $faker->numberBetween(1, 3), 
        'created_at' => new DateTime,
        'updated_at' => new DateTime,

    ];
});
