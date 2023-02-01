<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Order\OrderServiceInterface;
class OrderController extends Controller
{
    private $orderService;
    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
    }
    public function index(Request $request){
        $items = $this->orderService->all($request);
        // dd($items);
        return view('admin.orders.index',compact('items'));
    }
   
}
