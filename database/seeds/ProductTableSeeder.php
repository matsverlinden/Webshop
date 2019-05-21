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
            'name' => 'Sneakers van mesh',
            'price' => 34.99,
            'category_id' => 1,
            'image'=> 'img/schoen1.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'In vorm gestikte sneakers',
            'price' => 39.99,
            'category_id' => 1,
            'image'=> 'img/schoen2.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'Hoge sneakers',
            'price' => 99.00,
            'category_id' => 1,
            'image'=> 'img/schoen3.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('products')->insert([
            'name' => 'T-shirt met print',
            'price' => 12.99,
            'category_id' => 2,
            'image'=> 'img/shirt1.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => "NASA T-shirt met print",
            'price' => 14.99,
            'category_id' => 2,
            'image'=> 'img/shirt2.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]); 
        DB::table('products')->insert([
            'name' => "T-shirt met blokdessin",
            'price' => 12.99,
            'category_id' => 2,
            'image'=> 'img/shirt3.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('products')->insert([
            'name' => 'Joggers van geruwd twill',
            'price' => 24.99,
            'category_id' => 3,
            'image'=> 'img/broek1.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'Joggers',
            'price' => 24.99,
            'category_id' => 3,
            'image'=> 'img/broek2.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'Sweatpants - Regular fit',
            'price' => 19.99,
            'category_id' => 3,
            'image'=> 'img/broek3.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza chicken kebab',
            'price' => 8.50,
            'category_id' => 4,
            'image'=> 'img/pizzachickenkebab.png',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'Pizza salami',
            'price' => 8.50,
            'category_id' => 4,
            'image'=> 'img/pizzasalami.png',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'Pizza shoarma',
            'price' => 8.50,
            'category_id' => 4,
            'image'=> 'img/pizzashoarma.png',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('products')->insert([
            'name' => 'Red Bull energy drink',
            'price' => 2.50,
            'category_id' => 5,
            'image'=> 'img/blik1.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'AA drink',
            'price' => 1.50,
            'category_id' => 5,
            'image'=> 'img/blik2.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('products')->insert([
            'name' => 'Coca cola',
            'price' => 2.00,
            'category_id' => 5,
            'image'=> 'img/blik3.jpg',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
