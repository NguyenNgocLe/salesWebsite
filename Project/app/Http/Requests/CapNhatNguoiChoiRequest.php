<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatNguoiChoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'required | max:20|min:5',
            'mat_khau'      => 'required | max:90|min:5',
            'email'         => 'required | max:30|min:5',
            'hinh_dai_dien' => 'required | max:30|min:5',
            'diem_cao_nhat' => 'required | max:10|min:1',
            'credit'        => 'required | max:10|min:1'
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập!',
            'mat_khau.required'      => 'Vui lòng nhập mật khẩu!',
            'email.required'         => 'Vui lòng nhập email!',
            'hinh_dai_dien.required' => 'Vui lòng nhập đường dẫn hình đại diện!',
            'diem_cao_nhat.required' => 'Vui lòng nhập điểm cao nhất!',
            'credit.required'        => 'Vui lòng nhập gói credit!'
        ];
    }
}
// fgddsfgsdfg
