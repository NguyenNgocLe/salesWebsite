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
            'ten_goi' => 'bail|required|max:50|min:2',
            'ten_goi' => 'bail|unique:goi_credit,ten_goi,' . $this->id,
            'credit'  => 'bail|required|max:50|min:2',
            'so_tien' => 'bail|required|max:50|min:2',
        ];
    }

    public function messages()
    {
        return [
            'ten_goi.required'  => 'Vui lòng nhập tên gói credit!',
            'ten_goi.min'       => 'Tên gói phải lớn hơn 2 ký tự!',
            'ten_goi.max'       => 'Tên gói phải bé hơn 50 ký tự!',
            'ten_goi.unique'    => 'Tên gói credit đã tồn tại!',
            'credit.required'   => 'Vui lòng nhập gói credit!',
            'credit.min'        => 'Gói credit phải lớn hơn 2 ký tự!',
            'credit.max'        => 'Gói credit phải bé hơn 50 ký tự!',
            'so_tien.required'  => 'Vui lòng nhập số tiền!',
            'so_tien.min'       => 'Số tiền phải lớn hơn 2 ký tự!',
            'so_tien.max'       => 'Gói credit phải bé hơn 50 ký tự!',
        ];
    }
}
