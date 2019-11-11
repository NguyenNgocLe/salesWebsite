<?php

namespace App\Http\Controllers;

use App\LuotChoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LuotChoiController extends Controller
{
    public function index()
    {
        $luotChois = LuotChoi::all();
        return view('luot-choi.danh-sach', compact('luotChois'));
    }

    public function create()
    {
        // hiển thị form thêm mới
        return view('luot-choi.them-moi');
    }

    public function store(Request $request)
    {
        // thêm mới lượt chơi vào database
        $luotChoi = new LuotChoi();
        $luotChoi->nguoi_choi_id = $request->nguoi_choi_id;
        $luotChoi->so_cau = $request->so_cau;
        $luotChoi->diem = $request->diem;
        $luotChoi->save();
        return redirect()->route('luot-choi.danh-sach');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // hiển thị form cập nhật theo id
        $luotChoi = LuotChoi::find($id);
        return view('luot-choi.them-moi', compact('luotChoi'));
    }

    public function update(Request $request, $id)
    {
        // cập nhật người chơi vào database
        $luotChoi = LuotChoi::find($id);
        $luotChoi->so_cau = $request->so_cau;
        $luotChoi->diem = $request->diem;
        $luotChoi->save();
        return redirect()->route('luot-choi.danh-sach');
    }

    public function destroy($id)
    {
        // cập nhật trạng thái deleted vào database, ẩn item trên danh sách
    }
}
// dang fix dở dang phần này 
