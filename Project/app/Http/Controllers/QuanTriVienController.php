<?php

namespace App\Http\Controllers;

use App\QuanTriVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{

    public function dangNhap()
    {
        return view('quan-tri-vien.dang-nhap');
    }

    public function xuLyDangNhap(Request $request)
    {
        $tenDangNhap = $request->ten_dang_nhap;
        $matKhau = $request->mat_khau;
        if (Auth::attempt(['ten_dang_nhap' => $tenDangNhap, 'password' => $matKhau])) {
            return view('layout');
        }
        return view('quan-tri-vien.dang-nhap');
    }

    public function dangXuat()
    {
        Auth::logout();
        return view('quan-tri-vien.dang-nhap');
    }

    public function index()
    {
        // hiển thị danh sách quản trị viên
        $quanTriVien = QuanTriVien::all();
        return view('quan-tri-vien.danh-sach');
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
