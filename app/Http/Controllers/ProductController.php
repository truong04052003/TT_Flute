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
        return view('admin.product.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        $items = $this->productService->store($request);
        // dd($items);
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $items = $this->productService->show($id);
        // dd($items);
        return view('admin.product.show', compact('items'));
    }

    public function edit($id)
    {
        $items = $this->productService->find($id);
        $categories = Category::all();
        $product = $this->productService->find($id);
        // dd($product);
        return view('admin.product.edit', compact('items', 'categories', 'product'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        // dd(123);
        $items = $this->productService->update($request, $id);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $items = $this->productService->delete($id);
        return redirect()->route('products.index');
    }
    public function trash()
    {
        $items = $this->productService->getTrash();
        return view('admin.product.trash', compact('items'));
    }
    public function restore($id)
    {
        $items = $this->productService->restore($id);
        return redirect()->route('products.index');
    }
    public function deleteforever($id)
    {
        $items = $this->productService->deleteforever($id);
        return redirect()->route('products.index');
    }
}
