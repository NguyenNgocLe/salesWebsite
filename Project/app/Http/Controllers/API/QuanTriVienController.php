<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuanTriVien;

class QuanTriVienController extends Controller
{
    // chưa xử lý ẩn mật khẩu quản trị viên 
    public function listManage()
    {
        $quanTriViens = QuanTriVien::all();
        if ($quanTriViens != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách quản trị viên thành công",
                'data'    => $quanTriViens
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách quản trị viên thất bại"
        ]);
    }
    // lấy quản trị viên theo querystring 
    public function getManageByIdQueryString(Request $request)
    {
        $quanTriVien = QuanTriVien::find($request->id)->where('id', $request->id)->get();
        if ($quanTriVien == null) {
            return response()->json([
                'success' => false,
                'message' => "Lấy quản trị viên theo id thất bại"
            ]);
        }
        $result = [
            'success'       => true,
            'message'       => "Lấy quản trị viên theo id thành công",
            'quan_tri_vien' => $quanTriVien
        ];
        return response()->json($result);
    }
    // lấy quản trị viên theo đường dẫn PATH trên URL
    public function getManageByIdPath($id)
    {
        $quanTriVien = QuanTriVien::find($id);
        if ($quanTriVien == null) {
            return response()->json([
                'success' => false,
                'message' => "Lấy quản trị viên theo id thất bại"
            ]);
        }
        $result = [
            'success'       => true,
            'message'       => "Lấy quản trị viên theo id thành công",
            'quan_tri_vien' => $quanTriVien
        ];
        return response()->json($result);
    }
}
