<?php
namespace App\Services\Category;

use App\Services\ServiceInterface;

interface CategoryServiceInterface extends ServiceInterface{
    public function getTrash();
    public function restore($id);
    public function deleteforever($id);
    public function store($data);

}