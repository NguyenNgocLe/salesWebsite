<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemQuanTriVienRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'required | unique:quan_tri_vien|max:30|min:5',
            'mat_khau'      => 'required | max:200|min:5',
            'ho_ten'        => 'required | max:30|min:5'
        ];
    }

    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập quản trị viên!',
            'mat_khau.required'      => 'Vui lòng nhập mật khẩu quản trị viên!',
            'ho_ten.required'        => 'Vui lòng nhập họ tên quản trị viên!'
        ];
    }
}
