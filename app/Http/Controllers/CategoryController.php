<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\Category\CategoryServiceInterface;
use App\Http\Requests\category\StoreCategoryRequest;
use App\Http\Requests\category\UpdateCategoryRequest;
use Illuminate\Support\Facades\Log;
class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $this->authorize('viewAny', Category::class);
        $items = $this->categoryService->all($request);
        // dd($items);
        return view('admin.categories.index', compact('items'));
    }

    public function create()
    {
        $this->authorize('create', Category::class);
        return view('admin.categories.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        $items = $this->categoryService->store($request);
        try {
            toast('Thêm Thể Loại Thành Công!','success','top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!','error','top-right');
            return redirect()->route('categories.index');
        }
    }

    public function edit($id)
    {
        $this->authorize('update', Category::class);
        $items = $this->categoryService->find($id);
        return view('admin.categories.edit', compact('items'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $items = $this->categoryService->update($request, $id);
        try {
            toast('Sửa Thể Loại Thành Công!','success','top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!','error','top-right');
            return redirect()->route('categories.index');
        }
    }

    public function destroy($id)
    {
        $this->authorize('delete', Category::class);
        $items = $this->categoryService->delete($id);
        try {
            toast('Thể Loại Đã Đưa Vào Thùng!','success','top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra','error','top-right');
            return redirect()->route('categories.index');
        }
    }
    public function trash()
    {
        $items = $this->categoryService->getTrash();
        return view('admin.categories.trash', compact('items'));
    }
    public function restore($id)
    {
        $this->authorize('restore', Category::class);
        $items = $this->categoryService->restore($id);
        try {
            toast('Khôi Phục Thể Loại Thành Công!','success','top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!','error','top-right');
            return redirect()->route('categories.index');
        }
    }
    public function deleteforever($id)
    {
        $this->authorize('deleteforever', Category::class);
        $items = $this->categoryService->deleteforever($id);
        try {
            toast('Xóa Vĩnh Viễn Thể Loại Thành Công!','success','top-right');
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!','error','top-right');
            return redirect()->route('categories.index');
        }
    }
}
