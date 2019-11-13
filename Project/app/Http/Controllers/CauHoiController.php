<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\ThemCauHoiRequest;
use App\Http\Requests\CapNhatCauHoiRequest;

class CauHoiController extends Controller
{
    public function index()
    {
        $linhVucs = LinhVuc::all();
        $cauHois = CauHoi::whereIn('linh_vuc_id', $linhVucs->modelKeys())->get();
        return view('cau-hoi.danh-sach', compact('cauHois'));
    }

    public function create()
    {
        $listLinhVuc = LinhVuc::all();
        // hiển thị form thêm câu hỏi 
        return view('cau-hoi.them-moi', compact('listLinhVuc'));
    }

    public function store(ThemCauHoiRequest $request)
    {
        // thêm 1 câu hỏi vào database
        $cauHoi = new CauHoi();
        $cauHoi->noi_dung    = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an      = $request->dap_an;
        $cauHoi->save();
        return redirect()->route('cau-hoi.danh-sach');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $cauHoi = CauHoi::find($id);
        $listLinhVuc = LinhVuc::all();
        return view('cau-hoi.them-moi', compact('cauHoi','listLinhVuc'));
    }

    public function update(CapNhatCauHoiRequest $request, $id)
    {
        // cập nhật câu hỏi vào database
        $cauHoi = CauHoi::find($id);
        $cauHoi->noi_dung    = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an      = $request->dap_an;
        $cauHoi->save();
        $msg = "Cập nhật câu hỏi thành công";
        return redirect()->route('cau-hoi.danh-sach');
    }

    public function destroy($id)
    {
        // cập nhật trạng thái xóa lại theo thời gian xóa
        $cauHoi = CauHoi::find($id);
        $cauHoi->delete();
        return redirect()->route('cau-hoi.danh-sach');
    }
}
