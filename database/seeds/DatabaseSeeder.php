<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);

        factory(App\Announcement::class, 10)->create();

        factory(App\Event::class, 10)->create();

//        factory(App\User::class, 10)->create()
//        ->each(function ($user) {
//            $user->posts()->save(factory(App\Post::class)->make());
//            $user->comments()->save(factory(App\Comment::class)->make());
//            $user->reports()->save(factory(App\Report::class->make())
//        });

    }
}
