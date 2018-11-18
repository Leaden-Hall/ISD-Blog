<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'password' => Hash::make("hello123"),
        'email' => $faker->unique()->safeEmail,
        'is_notified' => '1',
        'avatar' => $faker->imageUrl(),
        'phone' => '0123456789',
        'gender' => '1',
        'user_status' => '1',
        'roles_id' => '1',
        'remember_token' => str_random(10),
    ];
});
