<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatLinhVucRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_linh_vuc'  => 'bail|required|max:32|min:2',
            'ten_linh_vuc'  => 'bail|unique:linh_vuc,ten_linh_vuc,' . $this->id
        ];
    }

    public function messages()
    {
        return [
            'ten_linh_vuc.required' => 'Vui lòng nhập tên lĩnh vực!',
            'ten_linh_vuc.min'      => 'Tên lĩnh vực phải nhiều hơn 2 ký tự!',
            'ten_linh_vuc.max'      => 'Tên lĩnh vực phải ít hơn 32 ký tự!',
            'ten_linh_vuc.unique'   => 'Tên lĩnh vực đã tồn tại'
        ];
    }
}
