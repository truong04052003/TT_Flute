<?php

namespace App\Services\User;

use App\Services\ServiceInterface;

interface UserServiceInterface extends ServiceInterface
{
    public function SoftDeletes($id);
    public function restore($id);
    public function trash($request);
 
}
