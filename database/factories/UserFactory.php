<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName->unique(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'email' => $faker->unique()->safeEmail,
        'is_notified' => '1',
        'avatar' => $faker->url,
        'user_status' => '1',
        'roles_id' => '1',
        'remember_token' => str_random(10),
    ];
});
