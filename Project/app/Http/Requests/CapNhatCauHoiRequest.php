<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatCauHoiRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'noi_dung'         => 'bail|required|max:255|min:3',
            'linh_vuc'         => 'bail|required',
            'phuong_an_a'      => 'bail|required|min:1',
            'phuong_an_b'      => 'bail|required|min:1',
            'phuong_an_c'      => 'bail|required|min:1',
            'phuong_an_d'      => 'bail|required|min:1',
            'dap_an'           => 'bail|required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'noi_dung.required'         => 'Vui lòng nhập nội dung câu hỏi!',
            'linh_vuc.required'         => 'Vui lòng chọn lĩnh vực!',
            'phuong_an_a.required'      => 'Vui lòng nhập phương án A!',
            'phuong_an_b.required'      => 'Vui lòng nhập phương án B!',
            'phuong_an_c.required'      => 'Vui lòng nhập phương án C!',
            'phuong_an_d.required'      => 'Vui lòng nhập phương án D!',
            'dap_an.required'           => 'Vui lòng nhập đáp án!'
        ];
    }
}
