<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Shoes',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('categories')->insert([
            'name' => 'Shirts',
            'created_at' => date("Y-m-d H:i:s")
        ]);


        DB::table('categories')->insert([
            'name' => 'Pants',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('categories')->insert([
            'name' => 'Food',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('categories')->insert([
            'name' => 'Drinks',
            'created_at' => date("Y-m-d H:i:s")
        ]);

    }
}
