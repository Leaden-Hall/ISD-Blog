<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => "admin",
            'description' => str_random(25)
        ]);

        DB::table('roles')->insert([
            'title' => "user",
            'description' => str_random(25)
        ]);
    }
}
