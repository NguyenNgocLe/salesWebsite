<?php

namespace App\Http\Controllers;

use Mail;
use App\CauHinhApp;
use Illuminate\Http\Request;

class CauHinhAppController extends Controller
{   
    public function index()
    {
        // hiển thị danh sách cấu hình app
        $cauHinhApps = CauHinhApp::all();
        return view('cau-hinh-app.danh-sach', compact('cauHinhApps'));
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
