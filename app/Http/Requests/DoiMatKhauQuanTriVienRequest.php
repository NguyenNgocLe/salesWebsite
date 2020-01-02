<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoiMatKhauQuanTriVienRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mat_khau_cu'               => 'bail|required|min:6|max:32',
            'mat_khau_moi'              => 'bail|required|min:6|max:32|confirmed',
            'mat_khau_moi_confirmation' => 'bail|required|min:6|max:32'
        ];
    }

    public function messages()
    {
        return [
            'mat_khau_cu.required'               => 'Vui lòng nhập mật khẩu cũ!',
            'mat_khau_cu.min'                    => 'Mật khẩu cũ phải từ 6 ký tự trở lên!',
            'mat_khau_cu.max'                    => 'Mật khẩu cũ phải ít hơn 32 ký tự!',
            'mat_khau_moi.required'              => 'Vui lòng nhập mật khẩu mới!',
            'mat_khau_moi.min'                   => 'Mật khẩu mới phải từ 6 ký tự trở lên!',
            'mat_khau_moi.max'                   => 'Mật khẩu mới phải ít hơn 32 ký tự!',
            'mat_khau_moi_confirmation.required' => 'Vui lòng nhập lại mật khẩu mới!',
            'mat_khau_moi_confirmation.min'      => 'Mật khẩu phải từ 6 ký tự trở lên!',
            'mat_khau_moi_confirmation.max'      => 'Mật khẩu phải ít hơn 32 ký tự!',
            'mat_khau_moi.confirmed'             => 'Mật khẩu không trùng khớp!'
        ];
    }
}
