<?php

use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('title')->insert([
            'title' => 'Mr',
        ]);
        DB::table('title')->insert([
            'title' => 'Ms',
        ]);
        DB::table('title')->insert([
            'title' => 'Miss',
        ]);
        DB::table('title')->insert([
            'title' => 'Dr',
        ]);
        DB::table('title')->insert([
            'title' => 'Prof',
        ]);
        DB::table('title')->insert([
            'title' => 'Mrs',
        ]);
        DB::table('title')->insert([
            'title' => 'Master',
        ]);
        DB::table('title')->insert([
            'title' => 'Capt',
        ]);
        DB::table('title')->insert([
            'title' => 'Rev',
        ]);

    }
}
