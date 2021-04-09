<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'cafe';
        $category->save();

        $category = new Category();
        $category->name = 'kem';
        $category->save();

        $category = new Category();
        $category->name = 'sinh tố';
        $category->save();
    }
}
