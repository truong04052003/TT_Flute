<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Customer\CustomerServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Auth\Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class ApiAuthController extends Controller
{

    protected $customerService;
    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->customerService = $customerService;
    }
    // dang nhap
    public function login(Request $request)
    {

    
    }


    // register
    public function register(Request $request)
    {
     
    }
    // dang xuat
    public function logout()
    {
    
    }
    // thong tin
    public function userProfile()
    {
        return response()->json(auth('api')->user());
    }
    // thay doi mat khau
    public function changePassWord(Request $request)
    {
   }
}
