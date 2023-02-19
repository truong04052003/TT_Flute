<?php

namespace App\Http\Requests\Group;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGroupRequest extends FormRequest
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
            'name' => 'required|unique:groups'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên Nhóm Quyền bắt buộc nhập',
            'name.unique' => 'Tên Nhóm Quyền đã tồn tại',
        ];
    }
}