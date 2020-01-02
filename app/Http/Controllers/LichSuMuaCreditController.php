<?php

namespace App\Http\Controllers;

use App\LichSuMuaCredit;
use Illuminate\Http\Request;

class LichSuMuaCreditController extends Controller
{
    public function index()
    {
        // hien thi danh sach Lich su mua credit
        $lichSuMuaCredits = LichSuMuaCredit::all(); 
        return view('lich-su-mua-credit.danh-sach', compact('lichSuMuaCredits'));
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
