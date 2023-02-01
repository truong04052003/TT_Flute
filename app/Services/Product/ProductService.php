<?php
namespace App\Services\Product;

use App\Services\Product\ProductServiceInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\BaseService;

class ProductService implements ProductServiceInterface {
    protected $productRepository;

    public function __construct( ProductRepositoryInterface $productRepository ){
        $this->productRepository = $productRepository;
    }
    public function all($request){
        return $this->productRepository->all($request);
    }
    public function find($id){
        return $this->productRepository->find($id);
    }
    public function create($data){
        return $this->productRepository->create($data);
    }
    public function update($id, $data){
        return $this->productRepository->update($id, $data);
    }
    public function delete($id){
        return $this->productRepository->delete($id);
    }
    public function store($request){
        return $this->productRepository->store($request);
    }
    public function getTrash(){
        return $this->productRepository->getTrash();
    }
    public function restore($id){
        return $this->productRepository->restore($id);
    }
    public function deleteforever($id){
        return $this->productRepository->deleteforever($id);
    }
}