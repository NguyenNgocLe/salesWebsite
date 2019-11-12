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
            'ten_linh_vuc'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ten_linh_vuc.required' => 'Vui lòng nhập tên lĩnh vực'
        ];
    }
}
