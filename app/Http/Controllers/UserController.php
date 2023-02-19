<?php

namespace App\Http\Controllers;

use App\Http\Requests\forget_password\Forgetpassword;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Services\User\UserServiceInterface;
use App\Services\Group\GroupServiceInterface;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


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
        return view('admin.users.index', compact('users', 'groups'));
    }

    public function create(Request $request)
    {
        $this->authorize('create', User::class);
        $groups = $this->GroupService->all($request);
        $users = $this->userService->all($request);
        return view('admin.users.create', compact('users', 'groups'));
    }


    public function store(StoreRequest $request)
    {
        try {
            $this->userService->create($request);
            toast('Thêm Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
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


    public function update(UpdateRequest $request, $id)
    {
        try {
            $this->userService->update($request, $id);
            toast('Sửa Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('users.index');
        }
    }


    public function destroy($id)
    {
        $this->authorize('delete', User::class);
        try {
            $user = $this->userService->delete($id);
            toast('Xóa Nhân Viên Thành Công!', 'success', 'top-right');
            return redirect()->route('users.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            toast('Có Lỗi Xảy Ra!', 'error', 'top-right');
            return redirect()->route('users.index');
        }
    }

    public function forget_password()
    {
        return view('admin.auth.formtakepassword');
    }
    public function post_forget_password(Forgetpassword $request)
    {
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
        return redirect()->route('login');
    }
}
