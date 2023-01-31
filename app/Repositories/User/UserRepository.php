<?php

namespace App\Repositories\User;

use App\Models\District;
use App\Models\Province;
use App\Models\User;
use App\Models\Ward;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    function getModel()
    {
        return User::class;
    }
    public function all($request)
    {
     
    }
    public function update($request, $id)
    {
      
    }
    public function create($data)
    {
      
    }
    public function softDeletes($id)
    {
       
    }
    public function delete($id)
    {
    
    }
    public function restore($id)
    {
      
    }
    public function trash($request)
    {
      
    }
    public function deletes($id)
    {
     
    }
    public function loginProcessing($data)
    {
      
    }
    public function logout()
    {
    }

    public function provinces()
    {
      
    }
    public function districts()
    {
    }
    public function wards()
    {
    }
}
