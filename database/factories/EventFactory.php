<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'summary' => $faker->paragraph(3),
        'banner' => $faker->imageUrl(),
        'content' => $faker->paragraph(15)
    ];
});
