<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Order\OrderServiceInterface;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ordersExport;
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
    public function show($id){
        $order = $this->orderService->find($id);
        // dd($order);
        $order_details = $order->order_details;
        // dd($order_details);
        return view('admin.orders.show',compact('order','order_details'));
    }
    public function export(){
        return Excel::download(new ordersExport,'orders.xlsx');
    }
}
