<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LichSuMuaCredit;
use App\NguoiChoi;

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
    // đang lỗi chỗ này
    public function updateHistoryBuyCreditById(Request $request)
    {
        $nguoiChois = NguoiChoi::find("id", $request->id);
        $nguoiChois->credit = $nguoiChois->credit + $request->credit;
        $nguoiChois->save();
        //
        $lichSuMuaCredits = new LichSuMuaCredit();
        $lichSuMuaCredits->nguoi_choi_id = $request->id;
        $lichSuMuaCredits->goi_credit_id = $request->goi_credit_id;
        $lichSuMuaCredits->credit = $request->credit;
        $lichSuMuaCredits->so_tien = $request->so_tien;
        $lichSuMuaCredits->save();
        return response()->json([
            'success' => true,
            'message' => 'Mua gói credit thành công',
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
    //
}
