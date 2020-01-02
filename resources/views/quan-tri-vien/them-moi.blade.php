@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">
                    @if(isset($quanTriVien))
                    Cập nhật
                    @else
                    Thêm
                    @endif
                    Quản trị viên
                </h4>
                @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>{{ $errors->first() }}</strong>
                        </div>
                    @elseif(isset($msg))
                        <div class="alert alert-success">
                            <strong>{{ $msg }}</strong>
                        </div>
                @endif
                @if(isset($quanTriVien))
                <form action="{{ route('quan-tri-vien.xu-ly-cap-nhat', ['$id' => $quanTriVien->id]) }}" method="POST">
                    @else
                    <form action="{{ route('quan-tri-vien.them-moi') }}" method="POST">
                        @endif
                        @csrf
                        <div class="form-group">
                                <label for="ten_dang_nhap">Tên đăng nhập:</label>
                                <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($quanTriVien)) value="{{ $quanTriVien->ten_dang_nhap }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="mat_khau">Mật khẩu:</label>
                            <input type="password" class="form-control" id="mat_khau" name="mat_khau">
                        </div>
                        <div class="form-group">
                                <label for="ho_ten">Họ tên:</label>
                                <input type="text" class="form-control" id="ho_ten" name="ho_ten" @if(isset($quanTriVien)) value="{{ $quanTriVien->ho_ten }}" @endif>
                            </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            @if(isset($quanTriVien))
                            Cập nhật
                            @else
                            Thêm
                            @endif
                            Quản trị viên
                        </button>
                        <a href="{{ route('quan-tri-vien.danh-sach') }}" class="btn btn-warning waves-effect waves-light">
                            Hủy
                        </a>
                    </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    @endsection