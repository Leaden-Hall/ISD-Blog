<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'summary' => $faker->paragraph(3),
        'content' => $faker->paragraph(20),
        'posts_status' => '2',
        'users_id' => $faker->numberBetween(1, 10)
    ];
});
