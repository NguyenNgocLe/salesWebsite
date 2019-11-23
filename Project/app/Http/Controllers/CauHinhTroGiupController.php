<?php

namespace App\Http\Controllers;

use App\CauHinhTroGiup;
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
