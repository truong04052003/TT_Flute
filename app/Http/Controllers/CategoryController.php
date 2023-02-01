<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\Category\CategoryServiceInterface;
use App\Http\Requests\category\StoreCategoryRequest;
use App\Http\Requests\category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $items = $this->categoryService->all($request);
        // dd($items);
        return view('admin.categories.index', compact('items'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        $items = $this->categoryService->store($request);
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $items = $this->categoryService->find($id);
        return view('admin.categories.edit', compact('items'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $items = $this->categoryService->update($request, $id);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $items = $this->categoryService->delete($id);
        return redirect()->route('categories.index');
    }
    public function trash()
    {
        $items = $this->categoryService->getTrash();
        // dd($items);
        return view('admin.categories.trash', compact('items'));
    }
    public function restore($id)
    {
        $items = $this->categoryService->restore($id);
        return redirect()->route('categories.index');
    }
    public function deleteforever($id)
    {
        $items = $this->categoryService->deleteforever($id);
        return redirect()->route('categories.index');
    }
}
