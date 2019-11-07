<?php

namespace App\Http\Controllers;

use App\LinhVuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinhVucController extends Controller
{
    
    public function index()
    {
        $linhVucs = LinhVuc::all();
        return view('linh-vuc.danh-sach',compact('linhVucs'));
    }

    public function create()
    {  
        // hien thi form them moi 
        return view('linh-vuc.them-moi');
    }

    public function store(Request $request)
    {
        $linhVuc = new LinhVuc();
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc.save($linhVuc);
        return redirect()->route('linh-vuc.danh-sach');
        // luu 1 doi tuong moi vao database 
    }

    public function show($id)
    {
        // xem chi tiet doi tuong
    }

    public function edit($id)
    {
        // hien thi len form cap nhat
    }

    public function update(Request $request, $id)
    {
        // cap nhat doi tuong vao database
    }

    public function destroy($id)
    {
        // xoa bo doi tuong
    }

    public function delete($id)
    {

    }

    public function onlyTrashed()
    {

    }
    public function restore($id)
    {

    }
}
