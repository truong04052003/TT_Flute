<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'gender' => 'required',
            'group_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống!',
            'email.required' => 'Không được để trống!',
            'password.required' => 'Không được để trống!',
            'address.required' => 'Không được để trống!',
            'phone.required' => 'Vui lòng nhập số điện thoại!',
            'image.required' => 'Vui lòng chọn ảnh!',
            'gender.required' => 'Vui lòng chọn giới tính!',
            'group_id.required' => 'Vui lòng chọn chức vụ!',
        ];
    }
}
