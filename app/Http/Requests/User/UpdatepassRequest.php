<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepassRequest extends FormRequest
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
            'password' => 'required',
            'newpassword' => 'required',
            'renewpassword' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'password.required' => 'Không được để trống!',
            'newpassword.required' => 'Không được để trống!',
            'renewpassword.required' => 'Vui lòng xác thực lại mật khẩu!',
        ];
    }
}
