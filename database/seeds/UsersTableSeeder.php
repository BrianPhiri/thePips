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
            'name' => 'The Pips',
            'title_id' => 1,
            'email' => 'pdfs@pips.com',
            'password' => bcrypt('login'),
            'verified' => 1,
        ]);
    }
}
