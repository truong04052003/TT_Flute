<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;
class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return Order::class;
    }

    public function __construct()
    {
        $this->setModel();
    }
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function all($request)
    {
        $orders = Order::select('*');
        return $orders->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function show($id){
        $orders = $this->model->find($id);
        return $orders;
    }

    public function store($data)
    {
        
    }
    public function update($request, $id)
    {
        
    }
    public function delete($id)
    {
        
    }
    public function orderWait()
    {
        $wait = 0;
        $query = Order::select('*');
        $query->orderBy('id', 'DESC');
        $query->where('status', 'LIKE', '%' . $wait . '%');
        return $query->paginate(5);
    }

    public function orderBrowser()
    {
        $browser = 1;
        $query = Order::select('*');
        $query->orderBy('id', 'DESC');
        $query->where('status', 'LIKE', '%' . $browser . '%');
        return $query->paginate(5);
    }
    public function orderCancel()
    {
        $cancel = 2;
        $query = Order::select('*');
        $query->orderBy('id', 'DESC');
        $query->where('status', 'LIKE', '%' . $cancel . '%');
        return $query->paginate(5);
    }
}