<?php

use Faker\Generator as Faker;

$factory->define(App\Announcement::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->paragraph(10)
    ];
});
