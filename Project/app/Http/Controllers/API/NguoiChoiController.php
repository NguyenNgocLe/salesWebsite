<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mail;

class NguoiChoiController extends Controller
{
    public function dangNhap(Request $request)
    {
        $thongTin = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password'      => $request->mat_khau
        ];
        if ($token = auth('api')->attempt($thongTin)) {
            return response()->json([
                'success'  => true,
                'messages' => 'Đăng nhập thành công!',
                'token'    => $token
            ]);
        }
        return response()->json([
            'success'  => false,
            'messages' => 'Đăng nhập thất bại!',
        ]);
    }

    public function layThongTin()
    {
        return auth('api')->user();
    }
}
