<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NguoiChoiController extends Controller
{
    public function dangNhap(Request $request)
    {
        $tenDangNhap = $request->ten_dang_nhap;
        $matKhau     = $request->mat_khau;
        if (($tenDangNhap == Auth::user()->ten_dang_nhap) && (Hash::make($matKhau) == Auth::user()->mat_khau)) {
            return response()->json([
                'success'  => true,
                'messages' => 'Đăng nhập thành công!',
                'token'    => 'Đây là token'
            ]);
        }
        return response()->json([
            'success'  => false,
            'messages' => 'Đăng nhập thất bại!',
        ]);
    }

    public function layThongTin(Request $request)
    {
        $token = $request->render('message_token');
        if ($token == ("day_la_token")) {
            return response()->json([
                'message' => 'Token hợp lệ'
            ]);
        }
        return response()->json([
            'message' => 'Token không hợp lệ'
        ]);
    }
}
