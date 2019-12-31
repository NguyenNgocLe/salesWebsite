<?php

namespace App\Http\Controllers;

use App\CauHinhDiemCauHoi;
use Illuminate\Http\Request;
use App\Http\Requests\CapNhatCauHinhDiemCauHoiRequest;

class CauHinhDiemCauHoiController extends Controller
{

    public function index()
    {
        // hiển thị danh sách cấu hình điểm câu hỏi
        $cauHinhDiemCauHois = CauHinhDiemCauHoi::all();
        return view('cau-hinh-diem-cau-hoi.danh-sach', compact('cauHinhDiemCauHois'));
    }

    public function create()
    {
        // hiển thị form thêm mới cấu hình điểm câu hỏi
        return view('cau-hinh-diem-cau-hoi.them-moi');
    }

    public function store(Request $request)
    {
        // lưu cấu hình điểm câu hỏi ms vào store
        $cauHinhDiemCauHoi         = new CauHinhDiemCauHoi();
        $cauHinhDiemCauHoi->thu_tu = $request->thu_tu;
        $cauHinhDiemCauHoi->diem   = $request->diem;
        $cauHinhDiemCauHoi->save();
        $msg                       = "Thêm cấu hình điểm câu hỏi thành công";
        return view('cau-hinh-diem-cau-hoi.them-moi', compact('msg'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // hiển thị form cập nhật cấu hình điểm câu hỏi cho người chơi theo id
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        return view('cau-hinh-diem-cau-hoi.them-moi', compact('cauHinhDiemCauHoi'));
    }

    public function update(CapNhatCauHinhDiemCauHoiRequest $request, $id)
    {
        // cập nhật cấu hình điểm câu hỏi vào database
        $cauHinhDiemCauHoi         = CauHinhDiemCauHoi::find($id);
        $cauHinhDiemCauHoi->thu_tu = $request->thu_tu;
        $cauHinhDiemCauHoi->diem   = $request->diem;
        $cauHinhDiemCauHoi->save();
        $msg = "Cập nhật cấu hình điểm câu hỏi thành công";
        return view("cau-hinh-diem-cau-hoi.danh-sach", compact("msg"));
    }

    public function destroy($id)
    {
        // cập nhật trạng thái deleted vào database, ẩn item trên danh sách
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $cauHinhDiemCauHoi->delete();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }
}
