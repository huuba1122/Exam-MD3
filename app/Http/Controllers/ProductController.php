<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;
    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    function index()
    {
        $products = $this->productService->getAll();
        return view('products.index', compact('products'));
    }
    function productList()
    {
        $products = $this->productService->getAll();
        return view('products.list', compact('products'));
    }

    function create()
    {
        $categories = $this->categoryService->getAll();
        return view('products.add', compact('categories'));
    }

    function store( Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('home.index');
    }

    function edit($id)
    {
        $product = $this->productService->findById($id);
        $categories = $this->categoryService->getAll();
        return view('products.edit', compact('product', 'categories'));
    }

    function update($id, Request $request)
    {
        $this->productService->update($id, $request);

        return redirect()->route('product.list');
    }

    function delete($id)
    {
        $this->productService->delete($id);
        return redirect()->route('product.list');
    }

    function search(Request $request)
    {
        dd($request->all());
    }
}
