<?php


namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository
{
    function getAll()
    {
        return Product::all();
    }

    function getInstance(): Product
    {
        return new Product();
    }

    function findById($id)
    {
        return Product::findOrfail($id);
    }

    function store($product)
    {
        $product->save();
    }

    function update($product)
    {
        $product->update();
    }

    function delete($product)
    {
        $product->delete();
    }
}
