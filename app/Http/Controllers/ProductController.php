<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\product\UpdateProductRequest;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        try {
            toast('Thêm Sản Phẩm Thành Công!','success','top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Thêm Sản Phẩm Thành Công!','danger','top-right');
            return redirect()->route('products.index');
        }
    }
    public function show($id)
    {
        $items = $this->productService->show($id);
        return view('admin.product.show', compact('items'));
    }

    public function edit($id)
    {
        $items = $this->productService->find($id);
        $categories = Category::all();
        $product = $this->productService->find($id);
        return view('admin.product.edit', compact('items', 'categories', 'product'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $items = $this->productService->update($request, $id);
        try {
            toast('Sửa Sản Phẩm Thành Công!','success','top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Sửa Sản Phẩm Không Thành Công!','danger','top-right');
            return redirect()->route('products.index');
        }
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $items = $this->productService->delete($id);
        try {
            toast('Xóa Tạm Thời Sản Phẩm Thành Công!','success','top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Xóa Tạm Thời Sản Phẩm Không Thành Công!','danger','top-right');
            return redirect()->route('products.index');
        }
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
        try {
            toast('Khôi phục Sản Phẩm Thành Công!','success','top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Khôi Phục Sản Phẩm Không Thành Công!','danger','top-right');
            return redirect()->route('products.index');
        }
        return redirect()->route('products.index');
    }
    public function deleteforever($id)
    {
        $items = $this->productService->deleteforever($id);
        try {
            toast('Xóa Vĩnh Viễn Sản Phẩm Thành Công!','success','top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Xóa Vĩnh Viễn Sản Phẩm Không Thành Công!','danger','top-right');
            return redirect()->route('products.index');
        }
        return redirect()->route('products.index');
    }
}
