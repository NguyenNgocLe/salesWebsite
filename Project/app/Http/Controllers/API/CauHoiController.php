<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
use App\LinhVuc;

class CauHoiController extends Controller
{
    public function getQuestionById(Request $request)
    {
        $page   = $request->page;
        $limit  = $request->limit;
        $cauHoi = CauHoi::where('linh_vuc_id', $request->linh_vuc_id)->orderBy('id', "ASC")->skip(($page - 1) * $limit)->take($limit)->get();
        $result = [
            'success' => true,
            'total'   => CauHoi::count(),
            'data'    => $cauHoi
        ];
        return response()->json($result);
    }
    public function listQuestion()
    {
        $cauHoi = CauHoi::all();
        $result = [
            'success' => true,
            'data'    => $cauHoi
        ];
        return response()->json($result);
    }

    public function getQuestionByCategoryId($id)
    {
        // $linhVucsID = LinhVuc::where("id", $id)->get();
        // $linhVucs = LinhVuc::all()->random($id);
        $cauHois = CauHoi::all();
        $cauHois = CauHoi::where("linh_vuc_id", $id)->get();
        //$data = CauHoi::where('linh_vuc_id', $id)->get()->random(1);
        if ($cauHois != null) {
            return $result = [
                'success' => true,
                'message' => "Lấy danh sách câu hỏi theo lĩnh vực thành công",
                'data'    => $cauHois
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách câu hỏi theo lĩnh vực thất bại",
        ]);
    }

    public function LayRandCauHoiTheoIDLinhVuc()
    {
        $listLinhVuc = LinhVuc::all()->random(1);
        $linhVucID = $listLinhVuc[0]->id;
        $data = CauHoi::where('linh_vuc_id', 1)->get()->random(1);
        return response()->json([
            'success'   => true,
            'message'   => 'Lấy câu hỏi theo id lĩnh vực thành công',
            'data'      => $data
        ]);
    }
}
