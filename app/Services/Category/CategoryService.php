<?php
namespace App\Services\Category;

use App\Services\Category\CategoryServiceInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Services\BaseService;

class CategoryService implements CategoryServiceInterface {
    protected $categoryRepository;

    public function __construct( CategoryRepositoryInterface $categoryRepository ){
        $this->categoryRepository = $categoryRepository;
    }

    public function all($request){
        return $this->categoryRepository->all($request);
    }

    public function find($id){
        return $this->categoryRepository->find($id);
    }

    public function create($data){
        return $this->categoryRepository->create($data);
    }
    public function update($id, $data){
        return $this->categoryRepository->update($id, $data);
    }

    public function delete($id){
        return $this->categoryRepository->delete($id);
    }
    public function store($request){
        return $this->categoryRepository->store($request);
    }
    public function getTrash(){
        return $this->categoryRepository->getTrash();
    }
    public function restore($id){
        return $this->categoryRepository->restore($id);
    }
    public function deleteforever($id){
        return $this->categoryRepository->deleteforever($id);
    }
}