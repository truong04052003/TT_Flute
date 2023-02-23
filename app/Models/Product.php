<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use softDeletes;
    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function image_products()
    {
        return $this->hasMany(Image_Product::class, 'product_id', 'id');
    }

    //tìm kiếm nâng cao
    public function scopeNameCate($query, $request)
    {
        if ($request->has('category_id')) {
            return $query->whereHas('category', function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            });
        }
        return $query;
    }
    public function scopeNameuser($query, $request)
    {
        if (isset($request['nameuser'])) {
            return  $query->where('name', 'LIKE', '%' . $request['nameuser'] . '%');
        }
        return $query;
    }   
   
}
