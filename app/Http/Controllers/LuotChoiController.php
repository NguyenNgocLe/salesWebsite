<?php

namespace App\Http\Controllers;

use App\LuotChoi;
use App\NguoiChoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ThemLuotChoiRequest;
use App\Http\Requests\CapNhatLuotChoiRequest;

class LuotChoiController extends Controller
{
    public function index()
    {
        $nguoiChois = NguoiChoi::all();
        $nguoiChois = NguoiChoi::all();
        $luotChois = LuotChoi::whereIn('nguoi_choi_id', $nguoiChois->modelKeys())->get();
        return view('luot-choi.danh-sach', compact('luotChois'));
    }

    public function create()
    {
        // hiển thị form thêm mới lượt chơi
        //return view('luot-choi.them-moi');
    }

    public function store(ThemLuotChoiRequest $request)
    {
        // thêm mới lượt chơi vào database
        // $luotChoi                = new LuotChoi();
        // $luotChoi->nguoi_choi_id = $request->id_nguoi_choi;
        // $luotChoi->so_cau        = $request->so_cau;
        // $luotChoi->diem          = $request->diem;
        // $luotChoi->save();
        // $msg = "Thêm lượt chơi thành công";
        // return view('luot-choi.them-moi', compact('msg'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // hiển thị form cập nhật theo id
        // $luotChoi = LuotChoi::find($id);
        // return view('luot-choi.them-moi', compact('luotChoi'));
    }

    public function update(CapNhatLuotChoiRequest $request, $id)
    {
        // cập nhật người chơi vào database
        // $luotChoi         = LuotChoi::find($id);
        // $luotChoi->so_cau = $request->so_cau;
        // $luotChoi->diem   = $request->diem;
        // $luotChoi->save();
        // $msg = "Cập nhật lượt chơi thành công";
        // return rview('luot-choi.danh-sach', compact('msg'));
    }

    public function destroy($id)
    {
        // cập nhật trạng thái deleted vào database, ẩn item trên danh sách
    }

    public function luotChoisById($id){
        $luotChoisById = LuotChoi::where('nguoi_choi_id', $id)->get();
        return view('luot-choi.danh-sach', compact('luotChoisById'));
    }
}