<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatGoiCreditRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_goi' => 'required | max:30|min:2',
            'credit'  => 'required | max:30|min:2',
            'so_tien' => 'required | max:30|min:2',
        ];
    }

    public function messages()
    {
        return [
            'ten_goi.required'  => 'Vui lòng nhập tên gói credit!',
            'credit.required'   => 'Vui lòng nhập gói credit!',
            'so_tien.required'  => 'Vui lòng nhập số tiền!',
        ];
    }
}
