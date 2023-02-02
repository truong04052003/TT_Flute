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
        return $this->belongsTo(Category::class);
    }
    public function image_products(){
        return $this->hasMany(Image_Product::class, 'product_id','id');
    }
}
