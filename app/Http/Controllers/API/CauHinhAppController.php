<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHinhApp;

class CauHinhAppController extends Controller
{
    public function listApp()
    {
        $cauHinhApps = CauHinhApp::all();
        if ($cauHinhApps != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách cấu hình app thành công",
                'data'    => $cauHinhApps
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách cấu hình app thất bại"
        ]);   
    }
}
