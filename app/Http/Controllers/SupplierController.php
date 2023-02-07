<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\supliers\StoreSuppliersRequest;
use App\Http\Requests\supliers\UpdateSuppliersRequest;
use App\Services\Supplier\SupplierServiceInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SupplierController extends Controller
{
    private $supplierService;
    public function __construct(SupplierServiceInterface $supplierService)
    {
        $this->supplierService = $supplierService;
    }

    public function index(Request $request)
    {
        $suppliers = $this->supplierService->all($request);
        return view('admin.suppliers.index', compact('suppliers'));
    }
    public function show($id)
    {
    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(StoreSuppliersRequest $request)
    {
        $data = $request->all();
        $this->supplierService->create($data);
        try {
            toast('Thêm Nhà Cung Cấp Thành Công!', 'success', 'top-right');
            return redirect()->route('suppliers.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.index');
        }
    }

    public function edit($id)
    {
        $item = $this->supplierService->find($id);
        return view('admin.suppliers.edit', compact('item'));
    }

    public function update(UpdateSuppliersRequest $request, $id)
    {
        // $data = $request->all();
        $items = $this->supplierService->update($request, $id);

        try {
            toast('Sửa Nhà Cung Cấp Thành Công!', 'success', 'top-right');
            return redirect()->route('suppliers.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.index');
        }
    }

    public function destroy($id)
    {
        $category = $this->supplierService->delete($id);
        try {
            toast('Đã Đưa Nhà Cung Cấp Vào Thùng Rác!', 'success', 'top-right');
            return redirect()->route('suppliers.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.index');
        }
    }

    public function getTrashed()
    {
        $suppliers = $this->supplierService->getTrashed();
        return view('admin.suppliers.trash', compact('suppliers'));
    }

    public function restore($id)
    {
        $items = $this->supplierService->restore($id);
        try {
            toast('Khôi Phục Thành Công!', 'success', 'top-right');
            return redirect()->route('suppliers.getTrashed');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.getTrashed');
        }
    }

    public function force_destroy($id)
    {
        $category = $this->supplierService->force_destroy($id);
        try {
            toast('Xóa Vĩnh Viễn Nhà Cung Cấp Thành Công!', 'success', 'top-right');
            return redirect()->route('suppliers.getTrashed');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('suppliers.getTrashed');
        }
    }
}
