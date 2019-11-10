<?php

namespace App\Http\Controllers;

use App\ChiTietLuotChoi;
use Illuminate\Http\Request;

class ChiTietLuotChoiController extends Controller
{
    
    public function index()
    {
        // hiển thị danh sách chi tiết lượt chơi
        $chiTietLuotChois = ChiTietLuotChoi::all();
        return view('chi-tiet-luot-choi.danh-sach', compact('chiTietLuotChois'));
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
