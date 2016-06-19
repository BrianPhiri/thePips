<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '101',
            'name' => 'Seat',
            'description' => 'Designed to support a person in a sitting position, as a chair, bench, or pew; a place on or in which one sits.',
        ]);
        DB::table('categories')->insert([
            'id' => '102',
            'name' => 'Tables',
            'description' => 'Furniture with a flat top and one or more legs, providing a level surface on which objects may be placed, and that can be used for such purposes as eating, writing, working, or playing games.',
        ]);
        DB::table('categories')->insert([
            'id' => '103',
            'name' => 'Storage',
            'description' => 'Furniture used for keeping Items organized.',
        ]);
        DB::table('categories')->insert([
            'id' => '104',
            'name' => 'Sleeping and Lying',
            'description' => 'Specially made for relaxing and or sleeping.',
        ]);
    }
}
