<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Product::class, 30)->create();//this line subst the lines belows
        // $p1 = [
        // 	'name' => "Learn how to give BJ",
        // 	'image'=> 'uploads/products/book.png',
        // 	'price'=> 5000,
        // 	'description'=>'kaka  kakak kaka bj'
        // ];

        // $p2 = [
        // 	'name' => "Learn how to make DT",
        // 	'image'=> 'uploads/products/book.png',
        // 	'price'=> 7000,
        // 	'description'=>'kaka  kakak kaka deep'
        // ];

        // Product::create($p1);
        // Product::create($p2);
    }
}
