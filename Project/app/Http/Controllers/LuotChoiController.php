<?php

namespace App\Http\Controllers;

use App\LuotChoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LuotChoiController extends Controller
{
    public function index()
    {
        $luotChoi = LuotChoi::all();
        return view('luot-choi.danh-sach', compact('luot-chois'));
    }

    public function create()
    {
        // hiển thị form thêm mới
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
