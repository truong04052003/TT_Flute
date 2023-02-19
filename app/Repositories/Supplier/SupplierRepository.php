<?php
namespace App\Repositories\Supplier;

use App\Models\Supplier;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;

class SupplierRepository extends BaseRepository implements SupplierRepositoryInterface{

    function getModel()
    {
        return Supplier::class;
    }
    public function all($request)
    {
        $search = $request->search;
        $suppliers = $this->model->select('*');
        if ($search) {
            $suppliers = $suppliers->where('name', 'like', '%' . $search . '%');
        }
        return $suppliers->orderBy('id','DESC')->paginate(5);
    }
    public function update($request , $id){

        $supplier = $this->model->find($id);
        // dd($request);
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->phone = $request->phone;
        $supplier->save();
        return $supplier;
    }
    public function delete($id){
        $supplier = $this->model->find($id);
        try {
            $supplier->delete();
            return true;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $supplier;
    }
    public function getTrashed(){
        $query = $this->model->onlyTrashed();
        $query->orderBy('id', 'desc');
        $supplier = $query->paginate(5);
        return $supplier;
    }
    public function restore($id){
        $supplier = $this->model->withTrashed()->findOrFail($id);
        $supplier->restore();
        return $supplier;
    }
    public function force_destroy($id){
        $supplier = $this->model->onlyTrashed()->findOrFail($id);
        $supplier->forceDelete();
        return $supplier;
    }


}