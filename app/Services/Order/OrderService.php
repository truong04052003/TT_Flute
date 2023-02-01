<?php

namespace App\Services\Order;

use App\Repositories\Order\OrderRepositoryInterface;
use App\Services\BaseService;

class OrderService extends BaseService implements OrderServiceInterface
{
    public $groupRepository;
    public function __construct(OrderRepositoryInterface $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
    public function all($request)
    {
        return $this->groupRepository->all($request);
    }
    public function show($id){
        return $this->groupRepository->show($id);
    }
    public function find($id){
        return $this->groupRepository->find($id);
    }
}
