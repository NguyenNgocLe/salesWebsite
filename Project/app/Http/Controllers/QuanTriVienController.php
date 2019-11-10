<?php

namespace App\Http\Controllers;

use App\QuanTriVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $quanTriViens = QuanTriVien::all();
        return view('quan-tri-vien.danh-sach', compact('quanTriViens'));
    }

    public function create()
    {
        // hiển thị form thêm quản trị viên
        return view('quan-tri-vien.them-moi');
    }

    public function store(Request $request)
    {
        // lưu quản trị viên mới vào database
        $quanTriVien = new QuanTriVien();
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau      = Hash::make($request->mat_khau);
        $quanTriVien->ho_ten        = $request->ho_ten;
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.danh-sach');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // hiển thị form cập nhật quản trị viên
        $quanTriVien = QuanTriVien::find($id);
        return view('quan-tri-vien.them-moi', compact('quanTriVien'));
    }

    public function update(Request $request, $id)
    {
        // cập nhật quản trị viên vào database
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau = $request->mat_khau;
        $quanTriVien->ho_ten = $request->ho_ten;
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.danh-sach');
    }

    public function destroy($id)
    {
        // cập nhật trạng thái quản trị viên deleted vào database, ẩn item trên danh sách
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->delete();
        return redirect()->route('quan-tri-vien.danh-sach');
    }
}
