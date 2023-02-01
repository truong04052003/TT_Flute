<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\product\UpdateProductRequest;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }
    
    public function index(Request $request)
    {
        $items = $this->productService->all($request);
        // dd($items);
        return view('admin.product.index',compact('items'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        $items = $this->productService->store($request);
        // dd($items);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy($id)
    {
        $items = $this->productService->delete($id);
        return redirect()->route('products.index');
    }
}
