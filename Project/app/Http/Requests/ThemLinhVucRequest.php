<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemLinhVucRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_linh_vuc'          => 'required | unique:linh_vuc|max:50|min:2|bail'
        ];
    }

    public function messages()
    {
        return [
            'ten_linh_vuc.required' => 'Vui lòng nhập tên lĩnh vực!',
            'ten_linh_vuc.unique'   => 'Tên lĩnh vực đã tồn tại!',
            'ten_linh_vuc.min'      => 'Tên lĩnh vực phải nhiều hơn 2 ký tự!',
            'ten_linh_vuc.max'      => 'Tên lĩnh vực phải ít hơn 50 ký tự!'
        ];
    }
}
