<?php

namespace App\Http\Controllers;

use Mail;
use App\CauHinhApp;
use App\Http\Requests\ThemCauHinhAppRequest;
use Illuminate\Http\Request;

class CauHinhAppController extends Controller
{
    public function index()
    {
        // hiển thị danh sách cấu hình app
        $cauHinhApps = CauHinhApp::all();
        return view('cau-hinh-app.danh-sach', compact('cauHinhApps'));
    }

    public function create()
    {
        // hiển thị form thêm mới cho cấu hình app
        return view('cau-hinh-app.them-moi');
    }

    public function store(ThemCauHinhAppRequest $request)
    {
        // lưu cấu hình app ms vào store
        $cauHinhApp                    = new CauHinhApp();
        $cauHinhApp->co_hoi_sai        = $request->co_hoi_sai;
        $cauHinhApp->thoi_gian_tra_loi = $request->thoi_gian_tra_loi;
        $cauHinhApp->save();
        $msg                           = "Thêm cấu hình App thành công";
        return view('cau-hinh-app.them-moi', compact('msg'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // hiển thị form cập nhật cấu hình app
        $cauHinhApp = CauHinhApp::find($id);
        return view('cau-hinh-app.them-moi', compact('cauHinhApp'));
    }

    public function update(Request $request, $id)
    {
        // cập nhật cấu hình app vào database
        $cauHinhApp                      = CauHinhApp::find($id);
        $cauHinhApp->co_hoi_sai          = $request->co_hoi_sai;
        $cauHinhApp->thoi_gian_tra_loi   = $request->thoi_gian_tra_loi;
        $cauHinhApp->save();
        $msg                             = "Cập nhật cấu hình App thành công";
        return view("cau-hinh-app.them-moi", compact("msg"));
    }

    public function destroy($id)
    {
        // cập nhật trạng thái deleted vào database, ẩn item trên danh sách
        $cauHinhApp = CauHinhApp::find($id);
        $cauHinhApp->delete();
        return redirect()->route('cau-hinh-app.danh-sach')->with('cap-nhat', 'Xóa cấu hình điểm câu hỏi thành công');
    }
}
