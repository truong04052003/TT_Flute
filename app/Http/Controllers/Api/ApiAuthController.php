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
    public function login(Request $request)
    {
        $validator = Validator::make( $request->all(),[
            'email' => 'required',
            'password' =>'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth('api')->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return  response()->json([
            'status' => true,
            'message' => 'User successfully Login',
            'customer' => $request->email,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api'),
            'user' => auth('api')->user()
        ]);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required|string|email|max:100|unique:customers',
            'name' => 'required|string',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->toJson(),
                'message' => 'Đăng Ký Không Thành Công',
                'status' => false,
            ], 400);
        }
        $data = array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        );
        $customer = $this->customerService->create($data);

        return response()->json([
            'status' => true,
            'message' => 'Đăng Ký Thành Công',
            'customer' => $customer
        ], 201);
    }
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }
    public function userProfile()
    {
        return response()->json(auth('api')->user());
    }
}
