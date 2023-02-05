<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;
use App\Models\Image_product;

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
        $key                    = $request->key;
        $id                     = $request->id;
        $name                   = $request->name;
        $products = Product::select('*');
      
        if ($name) {
            $products->where('name', 'LIKE', '%' . $name . '%');
        }
        if ($key) {
            $products->orWhere('id', $key);
            $products->orWhere('name', 'LIKE', '%' . $key . '%');
        }
        if ($id) {
            $products->where('id', $id);
        }

        if (!empty($request->search)) {
            $search = $request->search;
            $products = $products->Search($search);
        }

        if (!empty($request->category_id)) {
            $products->NameCate($request)
                ->filterPrice(request(['startPrice', 'endPrice']))
                ->filterDate(request(['start_date', 'end_date']));
        }

        $products->filterPrice(request(['startPrice', 'endPrice']));
        $products->filterDate(request(['start_date', 'end_date']));
        return $products->paginate(5);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function show($id)
    {
        $products = $this->model->find($id);
        return $products;
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
        if ($data->hasFile('image')) {
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
        $products->save();
        if ($data['file_names']) {
            foreach ($data['file_names'] as $file_detail) {
                // File::delete($product->file_names()->file_name);
                $detail_path = 'storage/' . $file_detail->store('/images', 'public');
                $products->image_products()->saveMany([
                    new Image_product([
                        'product_id' => $products->id,
                        'image' => $detail_path,
                    ]),
                ]);
            }
        }
        return $products;
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
        if ($request->hasFile('image')) {
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
        $products->save();
        return redirect()->route('products.index');
    }
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }
    public function getTrash()
    {
        $result = $this->model->onlyTrashed()->get();
        return $result;
    }
    public function restore($id)
    {
        $result = $this->model->withTrashed()->find($id)->restore();
        return $result;
    }
    public function deleteforever($id)
    {
        $result = $this->model->onlyTrashed()->find($id)->forceDelete();
        return $result;
    }
}
