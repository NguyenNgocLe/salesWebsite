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
            'ten_dang_nhap' => 'bail|required|max:20|min:5',
            'ten_dang_nhap' => 'bail|unique:nguoi_choi,ten_dang_nhap,' . $this->id,
            'mat_khau'      => 'bail|required',
            'email'         => 'bail|required|max:32|min:6',
            'email'         => 'bail|unique:nguoi_choi,email,' . $this->id,
            'hinh_dai_dien' => 'bail|required|max:32|min:6',
            'diem_cao_nhat' => 'bail|required|max:10|min:1',
            'credit'        => 'bail|required|max:10|min:1'
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập!',
            'ten_dang_nhap.unique'   => 'Tên đăng nhập đã tồn tại!',
            'ten_dang_nhap.min'      => 'Tên đăng nhập phải lớn hơn 6 ký tự!',
            'ten_dang_nhap.max'      => 'Tên đăng nhập phải bé hơn 32 ký tự!',
            'ten_dang_nhap.required' => 'Vui lòng nhập tên đăng nhập!',
            'mat_khau.required'      => 'Vui lòng nhập mật khẩu!',
            'email.required'         => 'Vui lòng nhập email!',
            'email.unique'           => 'Email đã tồn tại!',
            'email.min'              => 'Email phải lớn hơn 6 ký tự!',
            'email.max'              => 'Email phải bé hơn 32 ký tự!',
            'hinh_dai_dien.required' => 'Vui lòng nhập đường dẫn hình đại diện!',
            'hinh_dai_dien.min'      => 'Hình đại diện phải lớn hơn 6 ký tự!',
            'hinh_dai_dien.max'      => 'Hình đại diện phải bé hơn 32 ký tự!',
            'diem_cao_nhat.required' => 'Vui lòng nhập điểm cao nhất!',
            'diem_cao_nhat.min'      => 'Điểm cao nhất phải lớn hơn 1 ký tự!',
            'diem_cao_nhat.max'      => 'Hình đại diện phải bé hơn 10 ký tự!',
            'credit.required'        => 'Vui lòng nhập gói credit!',
            'credit.min'             => 'Gói credit phải lớn hơn 1 ký tự!',
            'credit.max'             => 'Gói credit phải bé hơn 10 ký tự!'
        ];
    }
}
// fgddsfgsdfg
