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
        return $this->model->find($id);
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
        $categories = $this->model->find($id);
        $categories->name = $request->name;
        try {
            $categories->save();
        } catch (\exception $e) {
            Log::error('message:' . $e->getMessage());
            return redirect()->route('categories.index');
        }
    }

    public function delete($id)
    {
        try {
            return $this->model->where('id',$id)->delete();
        } catch (\exception $e) {
            Log::error('message:' . $e->getMessage());
            return redirect()->route('categories.index');
        }
    }
}
