<?php

namespace App\Repositories\User;

use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function softDeletes($id);
    public function restore($id);
    public function trash($request);
    public function loginProcessing($data);
    public function logout();


}
