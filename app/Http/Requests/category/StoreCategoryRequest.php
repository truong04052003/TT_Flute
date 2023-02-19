<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ':Tên thuộc tính  bắt buộc nhập',
            'name.unique' => ':Tên thuộc tính  đã tồn tại',
        ];
    }
}
