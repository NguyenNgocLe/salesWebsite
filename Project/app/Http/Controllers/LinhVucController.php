<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LinhVuc;
use App\Http\Requests\ThemLinhVucRequest;
use App\Http\Requests\CapNhatLinhVucRequest;

class LinhVucController extends Controller
{

    public function index()
    {
        $linhVucs = LinhVuc::all();
        return view('linh-vuc.danh-sach', compact('linhVucs'));
    }

    public function create()
    {
        // hien thi form them moi 
        return view('linh-vuc.them-moi');
    }

    public function store(ThemLinhVucRequest $request)
    {
        // them moi 1 linh vuc
        $linhVuc               = new LinhVuc;
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();
        $msg = "Thêm lĩnh vực thành công";
        return view('linh-vuc.them-moi', compact('msg'));
    }

    public function show($id)
    {
        // xem chi tiet doi tuong
    }

    public function edit($id)
    {
        // hien thi len form cap nhat
        $linhVuc = LinhVuc::find($id);
        return view('linh-vuc.them-moi', compact('linhVuc'));
    }

    public function update(CapNhatLinhVucRequest $request, $id)
    {
        // cap nhat doi tuong vao database
        $linhVuc = LinhVuc::find($id);
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();
        return redirect()->route('linh-vuc.danh-sach')->with('cap-nhat', 'Cập nhật lĩnh vực thành công');
    }

    public function destroy($id)
    {
        // xoa bo doi tuong
        $linhVuc = LinhVuc::find($id);
        $linhVuc->delete();
        return redirect()->route('linh-vuc.danh-sach');
    }

    public function delete($id)
    { }

    public function onlyTrashed()
    { }
    public function restore($id)
    { }
}
