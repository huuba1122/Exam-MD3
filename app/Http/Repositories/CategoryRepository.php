<?php


namespace App\Http\Repositories;


use App\Models\Category;

class CategoryRepository
{

    function getAll()
    {
        return Category::all();
    }
}
