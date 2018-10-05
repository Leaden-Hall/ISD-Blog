<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->title->unique(),
        'summary' => $faker->paragraph(3),
        'banner' => $faker->imageUrl(),
        'content' => $faker->paragraph(10)
    ];
});
