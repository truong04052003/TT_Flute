<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;
class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    protected $model;

    public function getModel()
    {
        return Product::class;
    }

    public function __construct()
    {
        $this->setModel();
    }
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function all($request)
    {
        $products = Product::select('*');
        return $products->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store($data)
    {
        $products = $this->model;
        $products->name = $data['name'];
        $products->price = $data['price'];
        $products->quantity = $data['quantity'];
        $products->category_id = $data['category_id'];
        $products->manufacture = $data['manufacture'];
        $products->description = $data['description'];
        if($data->hasFile('image')){
            //lấy file
            $get_image = $data->file('image');
            //lấy tên file
            $get_name_image = $get_image->getClientOriginalName();
            $path = 'public/uploads/';
            //xóa đuôi
            $name_image = current(explode('.', $get_name_image));
            //thay đuôi thành jpg
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            //đưa ảnh vào thư mụa public/uploads
            $get_image->move($path, $new_image);
            //gán ảnh
            $products->image = $new_image;
            //lưu ảnh
        }
        try {
            // dd($products);
            $products->save();
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('products.index');
        }
    }
    public function update($request, $id)
    {
        $products = $this->model->find($id);
        $products->name = $request->name;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->category_id = $request->category_id;
        $products->manufacture = $request->manufacture;
        $products->description = $request->description;
        if($request->hasFile('image')){
            //lấy file
            $get_image = $request->file('image');
            //lấy tên file
            $get_name_image = $get_image->getClientOriginalName();
            $path = 'public/uploads/';
            //xóa đuôi
            $name_image = current(explode('.', $get_name_image));
            //thay đuôi thành jpg
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            //đưa ảnh vào thư mụa public/uploads
            $get_image->move($path, $new_image);
            //gán ảnh
            $products->image = $new_image;
            //lưu ảnh
        }
        try {
            $products->save();
            return redirect()->route('products.index');
        } catch (\exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('products.index');
        }
    }
    public function delete($id)
    {
        // dd($id);
        try {
            return $this->model->where('id', $id)->delete();
        } catch (\exception $e) {
            Log::error('message:' . $e->getMessage());
            return redirect()->route('products.index');
        }
    }
}