<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemCauHinhDiemCauHoiRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'thu_tu' => 'bail|required|min:1|max:20',
            'diem'   => 'bail|required|min:1|max:20',
        ];
    }

    public function messages()
    {
        return [
            'thu_tu.required' => 'Vui lòng nhập thứ tự cấu hình điểm câu hỏi!',
            'thu_tu.min'      => 'Vui lòng nhập thứ tự cấu hình điểm câu hỏi lớn hơn 1!',
            'thu_tu.max'      => 'Vui lòng nhập thứ tự cấu hình điểm câu hỏi bé hơn 20 ký tự!',
            'diem.required'   => 'Vui lòng nhập điểm của cấu hình điểm câu hỏi!',
        ];
    }
}
