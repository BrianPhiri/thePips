<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seats
        DB::table('subcategories')->insert([
            'category_id' => '101',
            'name' => 'Stool',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '101',
            'name' => 'Couch',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '101',
            'name' => 'Fauteuil',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '101',
            'name' => 'Chaise longue ',
            'description' => '',
        ]);

        // table
        DB::table('subcategories')->insert([
            'category_id' => '102',
            'name' => 'Coffee table',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '102',
            'name' => 'Dining table',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '102',
            'name' => 'Computer desk',
            'description' => '',
        ]);

        // Storage
        DB::table('subcategories')->insert([
            'category_id' => '103',
            'name' => 'Bookcase',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '103',
            'name' => 'Dresser',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '103',
            'name' => 'Nightstand',
            'description' => '',
        ]);
        
        // Sleeping and 
        DB::table('subcategories')->insert([
            'category_id' => '104',
            'name' => 'King (Beds)',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '104',
            'name' => 'Queen (Beds)',
            'description' => '',
        ]);
        DB::table('subcategories')->insert([
            'category_id' => '104',
            'name' => 'Bunk beds',
            'description' => '',
        ]);

    }
}
