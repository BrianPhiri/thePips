<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'title' => 'Supreme',
            'email' => 'admin@thePips.com',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'pips',
            'title' => 'SheHe',
            'email' => 'test@thePips.com',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
    }
}
