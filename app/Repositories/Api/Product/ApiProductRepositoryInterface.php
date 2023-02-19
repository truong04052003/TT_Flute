<?php
namespace App\Repositories\Api\Product;

use App\Repositories\Api\RepositoryInterface;

interface ApiProductRepositoryInterface{
    public function getAll();
    public function getprdNew();
    public function search($request);
    public function find($id);
    public function trendingProduct();
    public function find_images($id);
}
