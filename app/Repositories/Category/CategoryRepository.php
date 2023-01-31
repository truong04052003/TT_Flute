<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return Category::class;
    }

    public function __construct()
    {
        $this->setModel();
    }
    public function setModel()
    {
        
    }

    public function all($request)
    {
       
    }

    public function find($id)
    {
        
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
}