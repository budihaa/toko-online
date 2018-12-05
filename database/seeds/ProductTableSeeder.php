<?php

use App\Product;
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
        Product::create([
			"name" => "Produk A",
			"description" => "Deskripsi Produk A created by model"
		]);
    }
}
