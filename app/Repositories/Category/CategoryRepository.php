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
        return $query->paginate(5);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store($data)
    {
        $categories = $this->model;
        $categories->name = $data['name'];
        $categories->save();
        return redirect()->route('categories.index');
    }

    public function update($request, $id)
    {
        $categories = $this->model->find($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
        return redirect()->route('categories.index');
    }
    public function getTrash()
    {
        $result = $this->model->onlyTrashed()->get();
        return $result;
    }
    public function restore($id)
    {
        $result = $this->model->withTrashed()->find($id)->restore();
        return $result;
    }
    public function deleteforever($id)
    {
        $result = $this->model->withTrashed()->find($id)->forceDelete();
        return $result;
    }
}
