<?php

namespace App\Repositories\Group;

use App\Models\Group;
use App\Models\Role;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupRepository extends BaseRepository implements GroupRepositoryInterface
{

    function getModel()
    {
        return Group::class;
    }
    public function all($request)
    {
        $query = Group::select('*');
        return $query->get();
    }
    public function create($request)
    {
        $group = new Group();
        $group->name = $request->name;
        return $group->save();
    }
    public function update($id, $data)
    {
        $group = Group::find($id);
        $group->name = $data->name;
        return $group->save();
    }
 
    public function softDeletes($id)
    {
    }
    public function restore($id)
    {
        
    }
    public function trash($request)
    {
    }
    public function deletes($id)
    {
        
    }
    public function getTrash()
    {
       
    }
    public function forceDelete($id)
    {
      
    }
    public function detail($id)
    {
        $group = Group::find($id);

        $current_user = Auth::user();
        $userRoles = $group->roles->pluck('id', 'name')->toArray();
        $roles = Role::all()->toArray();
        $group_names = [];

        /////lấy tên nhóm quyền
        foreach ($roles as $role) {
            $group_names[$role['group_name']][] = $role;
        }
        $params = [
            'group' => $group,
            'userRoles' => $userRoles,
            'roles' => $roles,
            'group_names' => $group_names,
        ];
        return $params;
    }
    public function group_detail($id, $request)
    {
        $group = Group::find($id);
        $group->roles()->detach();
        $group->roles()->attach($request->roles);
        return true;
    }
}
