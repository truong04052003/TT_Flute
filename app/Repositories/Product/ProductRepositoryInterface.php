<?php
namespace App\Repositories\Product;

use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface{
    function getTrash();
    function restore($id);
    function deleteforever($id);
    function show($id);
    public function store($data);

}