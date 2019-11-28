<?php

namespace App\Http\Controllers;

use App\QuanTriVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ThemQuanTriVienRequest;
use App\Http\Requests\CapNhatQuanTriVienRequest;
use App\Http\Requests\DoiMatKhauQuanTriVienRequest;
use App\Http\Requests\DoiTenQuanTriVienRequest;


class QuanTriVienController extends Controller
{
    public function dangNhap()
    {
        return view('quan-tri-vien.dang-nhap');
    }

    public function xuLyDangNhap(Request $request)
    {
        $tenDangNhap = $request->ten_dang_nhap;
        $matKhau     = $request->mat_khau;
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
    //
    public function trangCaNhan()
    {
        return view('quan-tri-vien.trang-ca-nhan');
    }

    public function doiTen($id)
    {
        $quanTriVien = QuanTriVien::find($id);
        return view('quan-tri-vien.doi-ten', compact('quanTriVien'));
    }

    public function xuLyDoiTen(DoiTenQuanTriVienRequest $request, $id)
    {
        $hoTen               = $request->ho_ten;
        $quanTriVien         = QuanTriVien::find($id);
        $quanTriVien->ho_ten = $hoTen;
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.trang-ca-nhan');
    }

    public function doiMatKhau($id)
    {
        $quanTriVien = QuanTriVien::find('id');
        return view('quan-tri-vien.doi-mat-khau', compact('quanTriVien'));
    }

    public function xuLyDoiMatKhau(DoiMatKhauQuanTriVienRequest $request, $id)
    {
        // chưa cập nhật mật khẩu quản trị viên được
        $quanTriVien       = QuanTriVien::find($id);
        $matKhauCu         = Hash::make($request->mat_khau_cu);
        $matKhauMoi        = Hash::make($request->mat_khau_moi);
        $nhapLaiMatKhauMoi = Hash::make($request->mat_khau_moi_confirmation);
        if (($quanTriVien->mat_khau  == $matKhauCu) && ($matKhauMoi == $nhapLaiMatKhauMoi)) {
            $quanTriVien->mat_khau  = $nhapLaiMatKhauMoi;
            return redirect()->route('quan-tri-vien.trang-ca-nhan')->with('cap-nhat', "Cập nhật quản trị viên thành công");
        }
        return redirect()->route('quan-tri-vien.trang-ca-nhan')->with('cap-nhat', "Cập nhật quản trị viên thành công");
    }
    //
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

    public function store(ThemQuanTriVienRequest $request)
    {
        // lưu quản trị viên mới vào database
        $quanTriVien                = new QuanTriVien();
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau      = Hash::make($request->mat_khau);
        $quanTriVien->ho_ten        = $request->ho_ten;
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.danh-sach')->with('cap-nhat', "Thêm quản trị viên thành công");
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

    public function update(CapNhatQuanTriVienRequest $request, $id)
    {
        // cập nhật quản trị viên vào database
        $quanTriVien                = QuanTriVien::find($id);
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau      = Hash::make($request->mat_khau);
        $quanTriVien->ho_ten        = $request->ho_ten;
        $quanTriVien->save();
        return redirect()->route('quan-tri-vien.danh-sach')->with("cap-nhat", "Cập nhật quản trị viên thành công");
    }
    public function destroy($id)
    {
        // cập nhật trạng thái quản trị viên deleted vào database, ẩn item trên danh sách
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->delete();
        return redirect()->route('quan-tri-vien.danh-sach')->with('cap-nhat', 'Xóa quản trị viên thành công');
    }
    //
    public function onlyTrashed()
    {
        // hiển thị danh sách quản trị viên bị xóa 
        $onlyTrasheds = QuanTriVien::onlyTrashed()->get();
        return view('quan-tri-vien.danh-sach', compact('onlyTrasheds'));
    }

    public function restore($id)
    {
        // khôi phục quản trị viên bị xóa 
        $quanTriVien = QuanTriVien::onlyTrashed()->find($id);
        $quanTriVien->restore();
        return redirect()->route('quan-tri-vien.danh-sach')->with('cap-nhat', 'Khôi phục quản trị viên thành công');
    }

    public function delete($id)
    {
        // xóa quản trị viên khỏi database
        $quanTriVien = QuanTriVien::onlyTrashed()->find($id);
        $quanTriVien->forceDelete();
        return redirect()->route('quan-tri-vien.thung-rac');
    }

    // public function doiMatKhau($id)
    // {
    //     $quanTriVien = QuanTriVien::find($id);
    //     return view('quan-tri-vien.doi-mat-khau', compact('quanTriVien'));
    // }

    // public function xuLyDoiMatKhau($id)
    // {
    //     $quanTriVien = QuanTriVien::find($id);
    //     //
    // }
}
