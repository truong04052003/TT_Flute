<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Services\Customer\CustomerServiceInterface;

class CustomerController extends Controller
{
    protected $customerService;
    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index(Request $request)
    {
        $items = $this->customerService->all($request);
        return view('admin.customers.index', compact('items'));
    }
}
