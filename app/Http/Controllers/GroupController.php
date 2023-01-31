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

  
    public function create()
    {
        return view('admin.groups.create');
    }

    
    public function store(Request $request)
    {
      
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
      
    }

   
    public function destroy($id)
    {
     
    }
    public function trash()
    {
        $groups = $this->groupService->getTrash();
        return view('admin.groups.trash', compact('groups'));
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
