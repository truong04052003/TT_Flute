<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Role;
use App\Services\Group\GroupServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Group\StoreGroupRequest;
use App\Http\Requests\Group\UpdateGroupRequest;


class GroupController extends Controller
{
    private $groupService;
    public function __construct(GroupServiceInterface $GroupService)
    {
        $this->groupService = $GroupService;
    }
    public function index(Request $request)
    {
        $this->authorize('viewAny', Group::class);
        $groups = $this->groupService->all($request);
        return view('admin.groups.index', compact('groups'));
    }
    public function create(Request $request)
    {
        $this->authorize('create', Group::class);
        $groups = $this->groupService->all($request);
        return view('admin.groups.create', compact('groups'));
    }
    public function store(StoreGroupRequest $request)
    {
        try {
            $this->groupService->create($request);
            toast('Thêm Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $this->authorize('update', Group::class);
        $group = $this->groupService->find($id);
        return view('admin.groups.edit', compact('group'));
    }
    public function update(UpdateGroupRequest $request, $id)
    {
        try {
            $this->groupService->update($id, $request);
            toast('Sửa Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function destroy($id)
    {
        $this->authorize('delete', Group::class);
        try {
            $group = $this->groupService->delete($id);
            toast('Nhóm Quyền Đã Đưa Vào Thùng Rác!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có lỗi xảy ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
       
    }
    public function forcedelete($id)
    {
        $this->authorize('deleteforever', Group::class);
        try {
            $this->groupService->forceDelete($id);
            toast('Xóa Vĩnh Viễn Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function restore($id)
    {
        $this->authorize('restore', Group::class);
        $this->groupService->restore($id);
        try {
            toast('Khôi Phục Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function detail($id)
    {
        $group =  $this->groupService->detail($id);
        return view('admin.groups.detail', $group);
    }
    public function group_detail(Request $request, $id)
    {

        try {
            $this->groupService->group_detail($id, $request);
            toast('Cấp Quyền Thành Công!', 'success', 'top-right');
            return redirect()->route('group.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('group.index');
        }
    }
    public function trash()
    {
        $groups = $this->groupService->getTrash();
        return view('admin.groups.trash', compact('groups'));
    }
}
