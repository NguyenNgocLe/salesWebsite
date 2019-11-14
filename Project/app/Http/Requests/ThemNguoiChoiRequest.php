<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemNguoiChoiRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'bail|required|unique:nguoi_choi|max:32|min:6',
            'mat_khau'      => 'bail|required|max:32|min:6',
            'email'         => 'bail|required|unique:nguoi_choi|max:32|min:2',
            'hinh_dai_dien' => 'bail|required|max:32|min:2',
            'diem_cao_nhat' => 'bail|required|max:10',
            'credit'        => 'bail|required|max:10'
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập!',
            'ten_dang_nhap.unique'   => 'Tên đăng nhập đã tồn tại!',
            'ten_dang_nhap.min'      => 'Tên đăng nhập phải lớn hơn 6 ký tự!',
            'ten_dang_nhap.max'      => 'Tên đăng nhập phải bé hơn 32 ký tự!',
            'mat_khau.required'      => 'Vui lòng nhập mật khẩu!',
            'mat_khau.min'           => 'Mật khẩu phải lớn hơn 6 ký tự!',
            'mat_khau.max'           => 'Mật khẩu phải bé hơn 32 ký tự!',
            'email.required'         => 'Vui lòng nhập email!',
            'email.min'              => 'Email phải lớn hơn 6 ký tự!',
            'email.max'              => 'Email phải bé hơn 32 ký tự!',
            'hinh_dai_dien.required' => 'Vui lòng nhập đường dẫn hình đại diện!',
            'hinh_dai_dien.min'      => 'hình đại diện phải lớn hơn 6 ký tự!',
            'hinh_dai_dien.max'      => 'hình đại diện phải bé hơn 32 ký tự!',
            'diem_cao_nhat.required' => 'Vui lòng nhập điểm cao nhất!',
            'diem_cao_nhat.max'      => 'Điểm cao nhất phải bé hơn 10 số!',
            'credit.required'        => 'Vui lòng nhập gói credit!'
        ];
    }
}
