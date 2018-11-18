<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'posts_id' => $faker->numberBetween(1, 10),
        'users_id' => $faker->numberBetween(1, 10),
        'parent_id' => $faker->numberBetween(1, 10),
        'content' => $faker->paragraph(2)
    ];
});
