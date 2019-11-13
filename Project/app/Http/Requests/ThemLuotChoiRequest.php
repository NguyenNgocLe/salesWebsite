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
           'nguoi_choi_id' => 'request |min:1|max:10',
           'so_cau'        => 'request |min:1|max:10',
           'diem'          => 'request |min:1|max:10',
        ];
    }

    public function messages()
    {
        return [
           'nguoi_choi_id.request' => 'Vui lòng nhập ID người chơi!',
           'so_cau.request'        => 'Vui lòng nhập số câu của người chơi!',
           'diem.request'          => 'Vui lòng nhập điểm người chơi!',
        ];
    }
}
