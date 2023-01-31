<?php
namespace App\Repositories\Category;

use App\Repositories\RepositoryInterface;

interface CategoryRepositoryInterface extends RepositoryInterface{
    function getTrash();
    function restore($id);
    function deleteforever($id);
}
