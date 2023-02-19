<?php
namespace App\Services\Product;

use App\Services\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface{
    public function getTrash();
    public function restore($id);
    public function deleteforever($id);
    public function show($id);
    public function store($data);

}