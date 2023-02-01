<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Services\User\UserServiceInterface;
use App\Services\Group\GroupServiceInterface;
class UserController extends Controller
{
    private $userService;
    private $GroupService;
    public function __construct(UserServiceInterface $UserService, GroupServiceInterface $GroupService)
    {
        $this->GroupService = $GroupService;
        $this->userService = $UserService;
    }
   
    public function index(Request $request)
    {
        $groups = Group::get();
        $users = $this->userService->all($request);
        // dd($users);
        return view('admin.users.index',compact('users', 'groups'));
    }

    public function create(Request $request)
    {
        $groups = $this->GroupService->all($request);
        $users = $this->userService->all($request);
        return view('admin.users.create',compact('users', 'groups'));
    }

  
    public function store(Request $request)
    {
        $this->userService->create($request);
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $users = $this->userService->find($id);
        $groups = $this->GroupService->all($id);
        return view('admin.users.edit', compact('groups', 'users'));
    }

    
    public function update(Request $request, $id)
    {
        $this->userService->update($request, $id);
        return redirect()->route('users.index');
    }

    
    public function destroy($id)
    {
        $user = $this->userService->delete($id);
        return redirect()->route('users.index');
    }
}
