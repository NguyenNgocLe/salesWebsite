<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDO;

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

    public function singUp(Request $request)
    {
        $nguoiChoi = NguoiChoi::where('ten_dang_nhap', $request->ten_dang_nhap)->orWhere('email',$request->email)->first();
        $flage     = false;
        if ($nguoiChoi == null) {
            $nguoiChoi                = new NguoiChoi();
            $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
            $nguoiChoi->mat_khau      = Hash::make($request->mat_khau);
            $nguoiChoi->email         = $request->email;
            $nguoiChoi->hinh_dai_dien = 'null.jpg';
            $nguoiChoi->diem_cao_nhat = 0;
            $nguoiChoi->credit        = 0;
            $nguoiChoi->save();
            $flage = true;
        }
        return response()->json(['success' => $flage]);
    }

    public function layThongTin()
    {
        return auth('api')->user();
    }

    public function checkLogin(Request $request)
    {
        $nguoiChoi = NguoiChoi::where('ten_dang_nhap', $request->ten_dang_nhap)->first();
        if ($nguoiChoi != null && Hash::check($request->mat_khau, $nguoiChoi->mat_khau)) {
            $result = [
                'success' => true,
                'message' => "Đăng nhập thành công",
                'data'    => $nguoiChoi
            ];
            return response()->json($result);
        }
        return response()->json([
            'success' => false,
            'message' => "Đăng nhập thất bại"
        ]);
    }
    //
    public function listUser()
    {
        $nguoiChois = NguoiChoi::where("diem_cao_nhat", ">=", 0)->orderBy("diem_cao_nhat", "DESC")->get();
        //dd($nguoiChois);
        if ($nguoiChois != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách người chơi thành công",
                'data'    => $nguoiChois,
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách người chơi thất bại"
        ]);
    }

    public function store(Request $request)
    { }

    public function update(Request $request)
    {
        $nguoiChoi = NguoiChoi::where('ten_dang_nhap', $request->ten_dang_nhap)->first();
        if ($nguoiChoi != null) {
            //$nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
            $nguoiChoi->mat_khau      = Hash::make($request->mat_khau);
            $nguoiChoi->email         = $request->email;
            $nguoiChoi->hinh_dai_dien = "";
            $nguoiChoi->diem_cao_nhat = 0;
            $nguoiChoi->credit        = 1000;
            $nguoiChoi->save();
            return response()->json([
                'success' => true,
                'message' => "Cập nhật thành công",
                'data'    => $nguoiChoi
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => "Cập nhật thất bại"
        ]);
    }

    public function updatePassword(Request $request)
    {
        $nguoiChoi = NguoiChoi::where("ten_dang_nhap", $request->ten_dang_nhap)->first();
        $flage     = false;
        if ($nguoiChoi != null) {
            $nguoiChoi->mat_khau = Hash::make($request->mat_khau);
            $nguoiChoi->save();
            $flage = true;
            return response()->json([
                'success' => $flage
            ]);
        }
        return response()->json(['success' => $flage]);
    }

    public function updateCredit(Request $request)
    {
        $nguoiChoi = NguoiChoi::where('id', $request->id)->first();
        if ($nguoiChoi != null) {
            $nguoiChoi->credit = $request->credit;
            $nguoiChoi->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    //
    public function upload()
    {
        // upload hình người chơi lên serve
    }
    //
    public function getUser(Request $request)
    {
        $page  = $request->page;
        $limit = $request->limit;
        $nguoiChoi = NguoiChoi::orderBy('diem_cao_nhat', "DESC")->skip(($page - 1) * $limit)->take($limit)->get();
        $result = [
            'success' => true,
            'message' => "Lấy người chơi thành công",
            'total'   => NguoiChoi::count(),
            'data'    => $nguoiChoi
        ];
        return response()->json($result);
    }
}
