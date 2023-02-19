<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    function getModel()
    {
        return User::class;
    }
    public function all($request)
    {
        $id                     = $request->id ?? '';
        $key                    = $request->key ?? '';
        $name                   = $request->name ?? '';
        $email                  = $request->email  ?? '';
    
        // thực hiện query
        $query = User::select('*');
        if ($id) {
            $query->where('id', $id);
        }
        if ($name) {
            $query->where('name', 'LIKE', '%' . $name . '%');
        }
        if ($email) {
            $query->where('email', 'LIKE', '%' . $email . '%');
        }
        if ($key) {
            $query->orWhere('id', $key);
            $query->orWhere('name', 'LIKE', '%' . $key . '%');
            $query->orWhere('email', 'LIKE', '%' . $key . '%');
        }

        if (!empty($request->search)) {
            $search = $request->search;
            $query = $query->Search($search);
        }
        $query->Iduser(request(['iduser']));
        $query->Nameuser(request(['nameuser']));
        $query->Phoneuser(request(['phoneuser']));
        return $query->orderBy('id', 'DESC')->paginate(5);
    }
    public function create($data)
    {
        $user = $this->model;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = bcrypt($data->password);
        $user->address = $data->address;
        $user->phone = $data->phone;
        $user->image = $data->image;
        $user->gender = $data->gender;
        $user->group_id = $data->group_id;
        if ($data['image']) {
            $file = $data['image'];
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = time();
            $newFileName = $fileName . '.' . $fileExtension;
            $path = 'storage/' . $data['image']->store('images', 'public');
            $user->image = $path;
        }
        try {
            $user->save();
            $datas = [
                'name' => $user->name,
                'pass' => $data->password,
            ];
            Mail::send('mail.adduser', compact('datas'), function ($email) use ($user) {
                $email->subject('TT Flute');
                $email->to($user->email, $user->name);
            });
            return true;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }
    public function update( $request, $id)
    {
       
        $user = $this->model->find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->group_id = $request->group_id;
        if ($request['image']) {
            $file = $request['image'];
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = time();
            $newFileName = $fileName . '.' . $fileExtension;
            $path = 'storage/' . $request['image']->store('images', 'public');
            $user->image = $path;
        }
        $user->save();
        return true;
    }

    public function softDeletes($id)
    {
    }
    public function delete($id)
    {
        $category = $this->model->findOrFail($id);
        try {
            $category->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
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
}
