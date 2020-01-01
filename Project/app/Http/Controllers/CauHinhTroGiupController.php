<?php

namespace App\Http\Controllers;

use App\CauHinhTroGiup;
use App\Http\Requests\CapNhatCauHinhTroGiupRequest;
use App\Http\Requests\ThemCauHinhTroGiupRequest;
use Illuminate\Http\Request;

class CauHinhTroGiupController extends Controller
{

    public function index()
    {
        $cauHinhTroGiups = CauHinhTroGiup::all();
        return view('cau-hinh-tro-giup.danh-sach', compact('cauHinhTroGiups'));
    }

    public function create()
    {
        // hiển thị form thêm mới cấu hình trợ giúp
        return view('cau-hinh-tro-giup.them-moi');
    }

    public function store(ThemCauHinhTroGiupRequest $request)
    {
        // lưu cấu hình điểm trợ giúp ms vào store
        $cauHinhTroGiup                = new CauHinhTroGiup();
        $cauHinhTroGiup->loai_tro_giup = $request->loai_tro_giup;
        $cauHinhTroGiup->thu_tu        = $request->thu_tu;
        $cauHinhTroGiup->credit        = $request->credit;
        $cauHinhTroGiup->save();
        $msg                           = "Thêm cấu hình trợ giúp thành công";
        return view('cau-hinh-tro-giup.them-moi', compact('msg'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // hiển thị form cập nhật cấu hình trợ giúp cho người chơi theo id
        $cauHinhTroGiup = CauHinhTroGiup::find($id);
        return view('cau-hinh-tro-giup.them-moi', compact('cauHinhTroGiup'));
    }

    public function update(CapNhatCauHinhTroGiupRequest $request, $id)
    {
        // cập nhật cấu hình điểm câu hỏi vào database
        $cauHinhTroGiup                  = CauHinhTroGiup::find($id);
        $cauHinhTroGiup->loai_tro_giup   = $request->loai_tro_giup;
        $cauHinhTroGiup->thu_tu          = $request->thu_tu;
        $cauHinhTroGiup->save();
        $msg = "Cập nhật cấu hình trợ giúp thành công";
        return view("cau-hinh-tro-giup.them-moi", compact("msg"));
    }

    public function destroy($id)
    {
        // cập nhật trạng thái deleted vào database
        $cauHinhTroGiup    = CauHinhTroGiup::find($id);
        $cauHinhTroGiup->delete();
        return redirect()->route('cau-hinh-tro-giup.danh-sach')->with('cap-nhat', 'Xóa cấu hình trợ giúp thành công');;
    }
}
