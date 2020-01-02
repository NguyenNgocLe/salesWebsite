<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemCauHoiRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'noi_dung'            => 'bail|required|min:1|max:255|unique:cau_hoi',
            'linh_vuc'            => 'bail|required',
            'phuong_an_a'         => 'bail|required',
            'phuong_an_b'         => 'bail|required',
            'phuong_an_c'         => 'bail|required',
            'phuong_an_d'         => 'bail|required',
            'dap_an'              => 'bail|required'
        ];
    }

    public function messages()
    {
        return [
            'noi_dung.required'         => 'Vui lòng nhập nội dung câu hỏi!',
            'noi_dung.min'              => 'Vui lòng nhập nội dung câu hỏi lớn hơn 1!',
            'noi_dung.max'              => 'Vui lòng nhập nội dung câu hỏi bé hơn 300 ký tự!',
            'noi_dung.unique'           => 'Nội dung câu hỏi đã tồn tại. Vui lòng nhập nội dung khác!',

            'linh_vuc.required'         => 'Vui lòng chọn lĩnh vực!',
            'phuong_an_a.required'      => 'Vui lòng nhập phương án A!',
            'phuong_an_b.required'      => 'Vui lòng nhập phương án B!',
            'phuong_an_c.required'      => 'Vui lòng nhập phương án C!',
            'phuong_an_d.required'      => 'Vui lòng nhập phương án D!',
            'dap_an.required'           => 'Vui lòng nhập đáp án!'
        ];
    }
}
