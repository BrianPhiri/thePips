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
            'role' => 'Administrator',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'title' => 'Mr',
            'email' => 'user@thePips.com',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Joseph Sevilla',
            'title' => 'Dr',
            'email' => 'joe@strathmore.edu',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Brian Phiri',
            'title' => 'Mr',
            'email' => 'brian.phiri@strathmore.edu',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Brian Mwathi',
            'title' => 'Mr',
            'email' => 'brian.mwathi@strathmore.edu',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Sharleen Irungu',
            'title' => 'Ms',
            'email' => 'sharleen.irungu@strathmore.edu',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Nickson Munge',
            'title' => 'Mr',
            'email' => 'nixmunge@gmail.com',
            'password' => bcrypt('123456'),
            'verified' => 1,
        ]);
    }
}
