<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Order\OrderServiceInterface;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ordersExport;
use App\Models\Order;
class OrderController extends Controller
{
    private $orderService;
    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
    }
    public function index(Request $request){
        $items = $this->orderService->all($request);
        return view('admin.orders.index',compact('items'));
    }
    public function show($id){
        $order = $this->orderService->find($id);
        $order_details = $order->order_details;
        return view('admin.orders.show',compact('order','order_details'));
    }
    public function export(){
        return Excel::download(new ordersExport,'orders.xlsx');
    }
    public function update(Request $request, $id)
    {

        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->route('orders.index');
    }
    public function wait(){
        $orderWait = $this->orderService->orderWait();
        return view('admin.orders.wait',compact('orderWait'));
    }
    public function cancel(){
        $orderCancel = $this->orderService->orderCancel();
        return view('admin.orders.cancel',compact('orderCancel'));
    }
    public function browser(){
        $orderBrowser = $this->orderService->orderBrowser();
        return view('admin.orders.browser',compact('orderBrowser'));
    }
}
