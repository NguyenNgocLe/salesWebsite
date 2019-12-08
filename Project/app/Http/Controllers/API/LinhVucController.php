<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucController extends Controller
{ 
    public function listField()
    {
        $linhVucs = LinhVuc::all();
        if ($linhVucs != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách lĩnh vực thành công",
                'data'    => $linhVucs
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách lĩnh vực thất bại"
        ]);   
    }
}
