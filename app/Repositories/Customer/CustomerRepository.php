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
        $id                     = $request->id ?? '';
        $key                    = $request->key ?? '';
        $name                   = $request->name ?? '';
        $address                  = $request->address  ?? '';
        $email                  = $request->email  ?? '';
        $customers = Customer::select('*');
        $query = Customer::select('*');
        if ($id) {
            $query->where('id', $id);
        }
        if ($name) {
            $query->where('name', 'LIKE', '%' . $name . '%');
        }
        if ($address) {
            $query->where('address', 'LIKE', '%' . $address . '%');
        }
        if ($email) {
            $query->where('email', 'LIKE', '%' . $email . '%');
        }
        if ($key) {
            $query->orWhere('id', $key);
            $query->orWhere('name', 'LIKE', '%' . $key . '%');
            $query->orWhere('email', 'LIKE', '%' . $key . '%');
            $query->orWhere('address', 'LIKE', '%' . $key . '%');
        }

        if (!empty($request->search)) {
            $search = $request->search;
            $query = $query->Search($search);
        }
        $query->IDCustomer(request(['idcustomer']));
        $query->NameCustomer(request(['namecustomer']));
        $query->AddressCustomer(request(['addresscustomer']));
        $query->EmailCustomer(request(['emailcustomer']));
        $query->PhoneCustomer(request(['phonecustomer']));
        return $query->orderBy('id', 'DESC')->paginate(5);
    }
}