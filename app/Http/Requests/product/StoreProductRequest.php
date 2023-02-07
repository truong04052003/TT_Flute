<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products',
            'category_id' => 'required',
            'quantity' => 'required|min:1',
            'price' => 'required',
            'supplier_id' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm bắt buộc phải nhập!',
            'name.unique' => 'Tên sản phẩm đã tồn tại!',
            'category_id.required' => 'Loại sản phẩm bắt buộc phải nhập!',
            'quantity.required' => 'Số lượng sản phẩm bắt buộc nhập',
            'quantity.min' => 'Số lượng sản phẩm lớn hơn hoặc bằng 1',
            'price.required' => 'Giá sản phẩm bắt buộc nhập',
            'supplier_id.required' => 'sản xuất bắt buộc nhập',
            'description.required' => 'Mô tả sản phẩm bắt buộc nhập',
            'image.required' => 'Ảnh sản phẩm bắt buộc nhập',
        ];
    }
}
