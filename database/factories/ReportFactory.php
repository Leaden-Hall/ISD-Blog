<?php

use Faker\Generator as Faker;

$factory->define(App\Report::class, function (Faker $faker) {
    return [

        'reporter_id' => $faker->numberBetween(1, 10),
        'reported_posts_id' => $faker->numberBetween(1, 10),
        'reported_users_id' => null,
        'content' => $faker->paragraph(7),
        'report_status' => '2'
    ];
});
