<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Nike PG 3',
            'price' => 120.00,
            'product_category' => 'Shoes',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('products')->insert([
            'name' => 'Hollister Muscle Fit Graphic Tee',
            'price' => 25.00,
            'product_category' => 'Shirts',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('products')->insert([
            'name' => 'Forever 21 Striped-Trim Distressed Jeans',
            'price' => 32.00,
            'product_category' => 'Pants',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'Pizza chicken kebab',
            'price' => 8.50,
            'product_category' => 'Food',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('products')->insert([
            'name' => 'Red Bull energy drink',
            'price' => 2.50,
            'product_category' => 'Drinks',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
