<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatCauHinhDiemCauHoiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'thu_tu' => 'bail|required|max:20|min:1',
            'diem'   => 'bail|required|max:100|min:1',
        ];
    }

    public function messages()
    {
        return [
            'thu_tu.required'   => 'Vui lòng nhập thứ tự điểm câu hỏi!',
            'diem.required'     => 'Vui lòng nhập điểm câu hỏi!',
            'thu_tu.min'        => 'Thứ tự cấu hình điểm câu hỏi phải lớn hơn 1 ký tự!',
            'thu_tu.max'        => 'Thứ tự cấu hình điểm câu hỏi phải bé hơn 20 ký tự!',
            'diem.min'          => 'Điểm phải lớn hơn 1 ký tự!',
            'diem.max'          => 'Điểm phải bé hơn 20 ký tự!',
        ];
    }
}
