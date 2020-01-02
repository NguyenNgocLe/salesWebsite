<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemLuotChoiRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           'nguoi_choi_id' => 'bail|request|min:1|max:10000',
           'so_cau'        => 'bail|request|min:1|max:100',
           'diem'          => 'bail|request|min:1|max:100',
        ];
    }

    public function messages()
    {
        return [
           'nguoi_choi_id.request' => 'Vui lòng nhập ID người chơi!',
           'nguoi_choi_id.min'     => 'Id người chơi phải lớn hơn 0!',
           'nguoi_choi_id.max'     => 'Id người chơi phải bé hơn 10000',
           'so_cau.request'        => 'Vui lòng nhập số câu của người chơi!',
           'so_cau.min'            => 'Số câu của người chơi phải lớn hơn 1!',
           'so_cau.max'            => 'Số câu của người chơi phải bé hơn 100!',
           'diem.request'          => 'Vui lòng nhập điểm người chơi!',
           'diem.min'              => 'Điểm của người chơi phải lớn hơn 1!',
           'diem.max'              => 'Điểm của người chơi phải bé hơn 100!'
        ];
    }
}
