<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Supplier\SupplierServiceInterface;
use Exception;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    private $supplierService;
    public function __construct(SupplierServiceInterface $supplierService)
    {
        $this->supplierService = $supplierService;
    }

    public function index(Request $request)
    {
        $suppliers = $this->supplierService->all($request);
        return view('admin.suppliers.index',compact('suppliers'));
    }
    public function show($id){

    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->supplierService->create($data);
        return redirect()->route('suppliers.index');
       
    }

    public function edit($id)
    {
        $item = $this->supplierService->find($id);
        return view('admin.suppliers.edit',compact('item'));
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        $this->supplierService->update( $id, $data);
        return redirect()->route('suppliers.index');
      
   
    }

    public function destroy($id)
    {
        $category = $this->supplierService->delete( $id);
        return redirect()->route('suppliers.index');
     
    }

    public function getTrashed(){
        $suppliers = $this->supplierService->getTrashed();
        return view('admin.suppliers.trash',compact('suppliers'));
    }

    public function restore($id){
        $this->supplierService->restore($id);
        return redirect()->route('supplier.getTrashed');
      
    }

    public function force_destroy($id){
        $category = $this->supplierService->force_destroy( $id);
        return redirect()->route('supplier.getTrashed');
     
    }
}