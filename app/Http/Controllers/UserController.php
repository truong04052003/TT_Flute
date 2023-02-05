<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Services\User\UserServiceInterface;
use App\Services\Group\GroupServiceInterface;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\User\UpdatepassRequest;


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
        $this->authorize('viewAny', User::class);
        $groups = Group::get();
        $users = $this->userService->all($request);
        // dd($users);/
        return view('admin.users.index', compact('users', 'groups'));
    }

    public function create(Request $request)
    {
        $this->authorize('create', User::class);
        $groups = $this->GroupService->all($request);
        $users = $this->userService->all($request);
        return view('admin.users.create', compact('users', 'groups'));
    }


    public function store(Request $request)
    {
        $this->userService->create($request);
        try {
            toast('Thêm Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Thêm Nhân Viên Không Thành Công!', 'danger', 'top-right');
            return redirect()->route('users.index');
        }
    }

    public function show($id)
    {
        $users = $this->userService->find($id);
        return view('admin.Users.profile', compact('users'));
    }


    public function edit($id)
    {
        $this->authorize('update', User::class);
        $users = $this->userService->find($id);
        $groups = $this->GroupService->all($id);
        return view('admin.users.edit', compact('groups', 'users'));
    }


    public function update(Request $request, $id)
    {
        $this->userService->update($request, $id);
        try {
            toast('Sửa Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Sửa Nhân Viên Không Thành Công!', 'danger', 'top-right');
            return redirect()->route('users.index');
        }
    }


    public function destroy($id)
    {
        $this->authorize('delete', User::class);
        $user = $this->userService->delete($id);
        return redirect()->route('users.index');
    }

    public function forget_password(){
        return view('admin.auth.formtakepassword');
    }
    public function post_forget_password(Request $request){
        $customer = User::where('email', $request->email)->first();
        if ($customer) {
            $pass = Str::random(6);
            $customer->password = bcrypt($pass);
            $customer->save();
            $data = [
                'name' => $customer->name,
                'pass' => $pass,
                'email' => $customer->email,
            ];
            Mail::send('mail.mailUser', compact('data'), function ($email) use ($customer) {
                $email->subject('Shop Bán Sáo');
                $email->to($customer->email, $customer->name);
            });
        }
        return redirect()->route('postlogin');
    }
    }
