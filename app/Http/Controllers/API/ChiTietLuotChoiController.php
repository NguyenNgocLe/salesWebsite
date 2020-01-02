<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChiTietLuotChoi;

class ChiTietLuotChoiController extends Controller
{
    public function playDetail()
    {
        $chiTietLuotChois = ChiTietLuotChoi::all();
        if ($chiTietLuotChois != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách chi tiết lượt chơi thành công",
                'data'    => $chiTietLuotChois
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách chi tiết lượt chơi thất bại"
        ]);
    }
}
