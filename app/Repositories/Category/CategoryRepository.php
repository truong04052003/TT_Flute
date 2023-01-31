<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;

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
        $this->model = app()->make($this->getModel());
    }

    public function all($request)
    {
        $query = Category::select('*');
        return $query->get();
    }

    public function find($id)
    {
    }

    public function store($data)
    {
        $categories = $this->model;
        $categories->name = $data['name'];
        try {
            $categories->save();
            return redirect()->route('categories.index');
        } catch (\exception $e) {
            Log::error('message:' . $e->getMessage());
            return redirect()->route('categories.index');
        }
    }

    public function update($request, $id)
    {
    }

    public function delete($id)
    {
    }
}
