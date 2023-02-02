<?php

namespace App\Services\Order;

use App\Repositories\Order\OrderRepositoryInterface;
use App\Services\BaseService;

class OrderService extends BaseService implements OrderServiceInterface
{
    public $orderRepository;
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    public function all($request)
    {
        return $this->orderRepository->all($request);
    }
    public function show($id){
        return $this->orderRepository->show($id);
    }
    public function find($id){
        return $this->orderRepository->find($id);
    }
    public function orderBrowser()
    {
        return $this->orderRepository->orderBrowser();
    }
    public function orderWait()
    {
        return $this->orderRepository->orderWait();
    }
    public function orderCancel()
    {
        return $this->orderRepository->orderCancel();
    }
}
