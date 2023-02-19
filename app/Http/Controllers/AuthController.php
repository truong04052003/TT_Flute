<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
       
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('admin.auth.login');
        }
    }

    public function postLogin(LoginRequest  $request)
    {
       
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            toast('Đăng Nhập Thành Công!','success','top-right');
            return redirect()->route('dashboard');
        } else {
            toast('Sai mật khẩu hoặc tài khoản!','error','top-right');
            return redirect()->route('login');
        }
    
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
