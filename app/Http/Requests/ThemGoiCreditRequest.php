<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemGoiCreditRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_goi' => 'bail|required|unique:goi_credit|max:30|min:2',
            'credit'  => 'bail|required|max:50|min:2',
            'so_tien' => 'bail|required|max:50|min:2',
        ];
    }

    public function messages()
    {
        return [
            'ten_goi.required'  => 'Vui lòng nhập tên gói credit!',
            'ten_goi.unique'    => 'Tên gói đã tồn tại!',
            'ten_goi.min'       => 'Tên gói credit phải lớn hơn 2 ký tự!',
            'ten_goi.max'       => 'Tên gói credit phải ít hơn 50 ký tự!',
            'credit.required'   => 'Vui lòng nhập gói credit!',
            'so_tien.required'  => 'Vui lòng nhập số tiền!',
            'credit.min'        => 'Gói credit phải lớn hơn 2 ký tự!',
            'credit.max'        => 'Gói credit phải ít hơn 50 ký tự!',
            'so_tien.min'       => 'Số tiền phải lớn hơn 2 ký tự!',
            'so_tien.max'       => 'Số tiền phải ít hơn 50 ký tự!',
        ];
    }
}
