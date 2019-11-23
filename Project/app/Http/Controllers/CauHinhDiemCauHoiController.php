<?php

namespace App\Http\Controllers;

use App\CauHinhDiemCauHoi;
use Illuminate\Http\Request;

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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
