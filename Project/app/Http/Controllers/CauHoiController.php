<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use Illuminate\Support\Facades\DB;

class CauHoiController extends Controller
{
    public function index()
    {
        $cauHois = CauHoi::all();
        return view('cau-hoi.danh-sach', compact('cauHois')); 
    }

    public function create()
    {
        // hiển thị form thêm câu hỏi 
        return view('cau-hoi.them-moi');
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
