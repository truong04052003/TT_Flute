<?php

namespace App\Services\Customer;

use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Services\BaseService;

class CustomerService extends BaseService implements CustomerServiceInterface {

    public $repository;
    public function __construct(CustomerRepositoryInterface $customerService)
    {
        $this->repository = $customerService;
    }
    public function all($request)
    {
        return $this->repository->all($request);
    }

}