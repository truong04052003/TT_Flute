<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Role;
use App\Services\Group\GroupServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class GroupController extends Controller
{
    private $groupService;
    public function __construct(GroupServiceInterface $GroupService)
    {
        $this->groupService = $GroupService;
    }

    public function index(Request $request)
    {

        $groups = $this->groupService->all($request);
        return view('admin.groups.index', compact('groups'));
    }


    public function create(Request $request)
    {
        $groups = $this->groupService->all($request);
        return view('admin.groups.create', compact('groups'));
    }


    public function store(Request $request)
    {
        $this->groupService->create($request);
        return redirect()->route('group.index');
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $group = $this->groupService->find($id);
        return view('admin.groups.edit', compact('group'));
    }

    public function update(Request $request, $id)
    {
        $this->groupService->update($id, $request);
        return redirect()->route('group.index');
    }


    public function destroy($id)
    {
        $group = $this->groupService->delete($id);
        return redirect()->route('group.index');
    }

    public function forcedelete($id)
    {
        try {
            $this->groupService->forceDelete($id);
            $notification = [
                'message' => 'Nhóm quyền đã bị xóa!',
                'alert-type' => 'success'
            ];
            return redirect()->route('group.trash')->with($notification);
        } catch (\Exception $e) {
            Session::flash('error', config('define.forceDelete.error'));
            Log::error('message:' . $e->getMessage());
            $notification = [
                'message' => 'có lỗi xảy ra!',
                'alert-type' => 'error'
            ];
            return redirect()->route('group.trash')->with($notification);
        }
    }

    public function restore($id)
    {
        $this->groupService->restore($id);
        return redirect()->route('group.trash');
    }
    public function detail($id)
    {
        $group =  $this->groupService->detail($id);
        return view('admin.groups.detail', $group);
    }
    public function group_detail(Request $request, $id)
    {

        $this->groupService->group_detail($id, $request);
        return redirect()->route('group.index');
    }
    public function trash()
    {
        $groups = $this->groupService->getTrash();
        return view('admin.groups.trash', compact('groups'));
    }
}
