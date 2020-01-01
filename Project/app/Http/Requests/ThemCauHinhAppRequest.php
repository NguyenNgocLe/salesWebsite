<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemCauHinhAppRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'co_hoi_sai'          => 'bail|required|min:1|max:20',
            'thoi_gian_tra_loi'   => 'bail|required|min:1|max:20',
        ];
    }

    public function messages()
    {
        return [
            'co_hoi_sai.required'        => 'Vui lòng nhập cơ hội sai của cấu hình app!',
            'thoi_gian_tra_loi.required' => 'Vui lòng nhập thời gian trả lời của cấu hình app!',
            'co_hoi_sai.min'             => 'Vui lòng nhập cơ hội sai phải lớn hơn 1 ký tự!',
            'co_hoi_sai.max'             => 'Vui lòng nhập cơ hội sai phải bé hơn 20 ký tự!',
            'thoi_gian_tra_loi.min'      => 'Vui lòng nhập thời gian trả lời phải lớn hơn 1 ký tự!',
            'thoi_gian_tra_loi.max'      => 'Vui lòng nhập thời gian trả lời phải bé hơn 20 ký tự!',
            
        ];
    }
}
