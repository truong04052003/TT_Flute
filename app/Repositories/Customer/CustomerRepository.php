<?php

namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{

    protected $model;

    public function getModel()
    {
        return Customer::class;
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
        $customers = Customer::select('*');
        return $customers->get();
    }
}