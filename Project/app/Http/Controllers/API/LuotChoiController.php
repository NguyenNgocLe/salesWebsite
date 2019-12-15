<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LuotChoi;
use App\NguoiChoi;

class LuotChoiController extends Controller
{
    public function addPlay(Request $request)
    {
        $luotChoi                = new LuotChoi();
        $luotChoi->nguoi_choi_id = $request->nguoi_choi_id;
        $luotChoi->so_cau        = $request->so_cau;
        $luotChoi->diem          = $request->diem;
        $luotChoi->ngay_gio      = $request->ngay_gio;
        $luotChoi->save();
        return response()->json([
            'success' => true,
            'message' => "Thêm lượt chơi thành công",
            'data'    => $luotChoi
        ]);
    }
    //
    public function listPlay()
    {
        $luotChois  = LuotChoi::all();
        if ($luotChois != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách lượt chơi thành công",
                'data'    => $luotChois,
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách lượt chơi thất bại"
        ]);
    }
    public function listPlayById(Request $request)
    {
        $luotChois  = LuotChoi::all()->where("id", $request->id);
        if ($luotChois != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách lượt chơi thành công",
                'data'    => $luotChois,
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách lượt chơi thất bại"
        ]);
    }
}
