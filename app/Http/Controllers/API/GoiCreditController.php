<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class GoiCreditController extends Controller
{
    public function listCredit()
    {
        $goiCredits = GoiCredit::all();
        if ($goiCredits != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách credit thành công",
                'data'    => $goiCredits
            ];
            return response()->json($result);
        }
        return response()->json([
            'success' => false,
            'message' => "Lấy danh sách credit thất bại"
        ]);
    }

    // muốn test post man trên parameter thì chuyển $id thành Request $request rồi $lichSuMuaCredits = $request->id
    public function getCreditPathById($id)
    {
        // truyền theo route (PATH)
        $goiCredits = GoiCredit::find($id);
        if ($goiCredits == null) {
            return response()->json([
                'success' => false,
                'message' => "Lấy danh sách credit theo id thất bại",
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => "Lấy danh sách credit theo id thành công",
            'data'    => $goiCredits
        ]);
    }

    //
    public function getCreditByIdQueryString(Request $request)
    {
        // truyền theo query string
        $goiCredits = GoiCredit::query($request->id)->where('id', $request->id)->get();
        if ($goiCredits == null) {
            return response()->json([
                'success' => false,
                'message' => "Lấy danh sách credit theo id thất bại",
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => "Lấy danh sách credit theo id thành công",
            'data'    => $goiCredits
        ]);
    }
}
