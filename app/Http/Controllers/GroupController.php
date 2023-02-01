<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Role;
use App\Services\Group\GroupServiceInterface;
use Illuminate\Http\Request;


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
        return view('admin.groups.create' ,compact('groups'));
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
       
    }

    public function restore($id)
    {
       
    }
    public function detail($id)
    {

    }
    public function group_detail(Request $request, $id)
    {
     
    }
}
