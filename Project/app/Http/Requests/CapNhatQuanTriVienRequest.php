<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatQuanTriVienRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'bail|required|unique:quan_tri_vien|max:32|min:5',
            'ten_dang_nhap' => 'bail|unique:quan_tri_vien,ten_dang_nhap,' . $this->id,
            'mat_khau'      => 'bail|required|max:200|min:5',
            'ho_ten'        => 'bail|required|max:30|min:5'
        ];
    }

    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập quản trị viên!',
            'ten_dang_nhap.unique'   => 'Tên đăng nhập quản trị viên đã tồn tại!',
            'ten_dang_nhap.min'      => 'Tên đăng nhập quản trị viên phải lớn hơn 5 ký tự!',
            'ten_dang_nhap.max'      => 'Tên đăng nhập quản trị viên phải bé hơn 32 ký tự!',
            'mat_khau.required'      => 'Vui lòng nhập mật khẩu quản trị viên!',
            'mat_khau.min'           => 'Mật khẩu phải lớn hơn 5 ký tự!',
            'mat_khau.max'           => 'Mật khẩu phải bé hơn 32 ký tự!',
            'ho_ten.required'        => 'Vui lòng nhập họ tên quản trị viên!'
        ];
    }
}
