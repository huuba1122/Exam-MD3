<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use Illuminate\Support\Facades\Storage;

class ProductService extends BaseService
{
    protected $productRepo;
    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    function getAll()
    {
        return $this->productRepo->getAll();
    }

    function findById($id)
    {
        return $this->productRepo->findById($id);
    }

    function store($request)
    {
        $product = $this->productRepo->getInstance();
        $product->fill($request->all());
        if ($request->hasFile('image')){
            $path =$this->updateLoadFile($request,'image','product-images');
            $product->image = $path;
        }
        $this->productRepo->store($product);
    }

    function update($id, $request)
    {
        $product = $this->productRepo->findById($id);
        $product->fill($request->all());
        if ($request->hasFile('image')){
            Storage::disk('public')->delete($product->image);
            $path = $this->updateLoadFile($request, 'image', 'product-images');
            $product->image = $path;
        }
        $this->productRepo->update($product);
    }

    function delete($id)
    {
        $product = $this->productRepo->findById($id);
        $this->productRepo->delete($product);
    }
}
