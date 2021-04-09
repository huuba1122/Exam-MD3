<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'cafe Mocha';
        $product->price = '30000';
        $product->category_id = '1';
        $product->save();

        $product = new Product();
        $product->name = 'kem dau';
        $product->price = '15000';
        $product->category_id = '2';
        $product->save();

        $product = new Product();
        $product->name = 'Sinh to Bo';
        $product->price = '30000';
        $product->category_id = '3';
        $product->save();
    }
}
