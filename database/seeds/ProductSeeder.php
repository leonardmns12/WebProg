<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(['name' => 'Iphone x 256 GB' , 'category' => 1 , 'description' => 'Warna grey dan blackmate' , 'price' => 16000000, 'image' => 'images/iphoneX']);
        DB::table('products')->insert(['name' => 'Macbook 16" inch 2020 512GB' , 'category' => 1 , 'description' => 'Warna grey dan blackmate' , 'price' => 16000000, 'image' => 'images/macbook16.png']);
        DB::table('products')->insert(['name' => 'Samsung S20 Ultra (8/128)' , 'category' => 1 , 'description' => 'Warna grey dan blackmate' , 'price' => 16000000, 'image' => 'images/s20ultra']);
    }
}
