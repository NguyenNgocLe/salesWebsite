<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanTriVienDangNhapRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'bail|required|max:20|min:1',
            'mat_khau'      => 'bail|required|max:20|min:1',
        ];
    }

    public function messages()
    {
        return [
        'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập!',
        'ten_dang_nhap.max'      => 'Vui lòng nhập tên đăng nhập phải bé hơn 20 ký tự!',
        'ten_dang_nhap.min'      => 'Vui lòng nhập tên đăng nhập phải lớn hơn 1 ký tự!',
        'mat_khau.required'      => 'Vui lòng nhập mật khẩu!',
        'mat_khau.max'           => 'Vui lòng nhập mật khẩu phải bé hơn 20 ký tự!',
        'mat_khau.min'           => 'Vui lòng nhập mật khẩu phải lớn hơn 1 ký tự!',
        ];
    }
}
