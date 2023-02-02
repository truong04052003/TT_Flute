<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required',
            'category_id' => 'required',
            'quantity' => 'required|min:1',
            'price' => 'required',
            'manufacture' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm bắt buộc phải nhập!',
            'category_id.required' => 'Loại sản phẩm bắt buộc phải nhập!',
            'quantity.required' => 'Số lượng Sản Phẩm bắt buộc nhập',
            'quantity.min' => 'Số lượng Sản Phẩm lớn hơn hoặc bằng 1',
            'manufacture.required' => 'sản xuất bắt buộc nhập',
            'price.required' => 'Giá Sản Phẩm bắt buộc nhập',
            'description.required' => 'Mô Tả Sản Phẩm bắt buộc nhập',
            'image.required' => 'Ảnh sản phẩm bắt buộc nhập',
        ];
    }
}
