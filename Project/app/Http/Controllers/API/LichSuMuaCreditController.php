<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LichSuMuaCredit;

class LichSuMuaCreditController extends Controller
{
    public function listHistoryBuyCredit()
    {
        $lichSuMuaCredits = LichSuMuaCredit::all();
        if ($lichSuMuaCredits != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách lịch sử mua credit thành công",
                'data'    => $lichSuMuaCredits
            ];
            return response()->json($result);
        }
        return response()->json([
            'success' => false,
            'message' => "Lấy danh sách lịch sử mua credit thất bại"
        ]);
    }
    
    // muốn test post man trên parameter thì chuyển $id thành Request $request rồi $lichSuMuaCredits = $request->id
    public function getHistoryBuyCreditPathById($id)
    {
        // truyền theo route (PATH)
        $lichSuMuaCredits = LichSuMuaCredit::find($id);
        if ($lichSuMuaCredits == null) {
            return response()->json([
                'success' => false,
                'message' => "Lấy lịch sử mua credit theo id thất bại"
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => "Lấy lịch sử mua credit theo id thành công",
            'data'    => $lichSuMuaCredits
        ]);
    }

    //
    public function getHistoryBuyCreditByIdQueryString(Request $request)
    {
        // truyền theo query string
        $lichSuMuaCredits = LichSuMuaCredit::query($request->id)->where('id', $request->id)->get();
        if ($lichSuMuaCredits == null) {
            return response()->json([
                'success' => false,
                'message' => "Lấy lịch sử mua credit theo id thất bại"
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => "Lấy lịch sử mua credit theo id thành công",
            'data'    => $lichSuMuaCredits
        ]);
    }
}
