<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\product\UpdateProductRequest;
use App\Models\Supplier;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $this->authorize('viewAny', Product::class);
        $items = $this->productService->all($request);
        $categories = Category::get();
        return view('admin.product.index', compact('items', 'categories'));
    }

    public function create()
    {
        $this->authorize('create', Product::class);
        $categories = Category::all();
        $suppliers = Supplier::get();
        return view('admin.product.create', compact('categories','suppliers'));
    }

    public function store(StoreProductRequest $request)
    {
        try {
            $items = $this->productService->store($request);
            toast('Thêm Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
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
        $this->authorize('update', Product::class);
        $items = $this->productService->find($id);
        $categories = Category::all();

        $suppliers = Supplier::get();
        // dd($suppliers);
        $product = $this->productService->find($id);
        return view('admin.product.edit', compact('items', 'categories','suppliers', 'product'));

    }

    public function update(UpdateProductRequest $request, $id)
    {
       
        try {
            $items = $this->productService->update($request, $id);
            toast('Sửa Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }

    public function destroy($id)
    {
        $this->authorize('delete', Product::class);
        try {
            $items = $this->productService->delete($id);
            toast('Sản Phẩm Đã Đưa Vào Thùng Rác!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    public function trash()
    {
        $items = $this->productService->getTrash();
        return view('admin.product.trash', compact('items'));
    }
    public function restore($id)
    {
        try {
            $items = $this->productService->restore($id);
            toast('Khôi phục Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    public function deleteforever($id)
    {

        $this->authorize('deleteforever', Product::class);
        try {
            $items = $this->productService->deleteforever($id);
            toast('Xóa Vĩnh Viễn Sản Phẩm Thành Công!', 'success', 'top-right');
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('products.index');
        }
    }
    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
