<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemCauHinhTroGiupRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'loai_tro_giup' => 'bail|required|min:1|max:20',
            'thu_tu'        => 'bail|required|min:1|max:20',
            'credit'        => 'bail|required|min:1|max:20',
        ];
    }

    public function messages()
    {
        return [
            'loai_tro_giup.required'        => 'Vui lòng nhập loại trợ giúp!',
            'thu_tu.required'               => 'Vui lòng nhập thứ tự cấu hình trợ giúp!',
            'credit.required'               => 'Vui lòng nhập credit cấu hình trợ giúp!',
            'loai_tro_giup.min'             => 'Vui lòng nhập loại trợ giúp phải lớn hơn 1 ký tự!',
            'loai_tro_giup.max'             => 'Vui lòng nhập loại trợ giúp phải bé hơn 20 ký tự!',
            'thu_tu.min'                    => 'Vui lòng nhập thứ tự cấu hình trợ giúp phải lớn hơn 1 ký tự!',
            'thu_tu.max'                    => 'Vui lòng nhập thứ tự cấu hình trợ giúp phải bé hơn 20 ký tự!',
            'credit.min'                    => 'Vui lòng nhập credit cấu hình trợ giúp phải lớn hơn 1 ký tự!',
            'credit.max'                    => 'Vui lòng nhập credit cấu hình trợ giúp phải bé hơn 20 ký tự!',
        ];
    }
}
