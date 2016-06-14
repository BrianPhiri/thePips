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
            'title_id' => 1,
            'email' => 'admin@thePips.com',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        // DB::table('users')->insert([
        //     'name' => 'pips',
        //     'title_id' => 1,
        //     'email' => 'test@thePips.com',
        //     'password' => bcrypt('123456'),
        //     'verified' => 1,
        // ]);
    }
}
