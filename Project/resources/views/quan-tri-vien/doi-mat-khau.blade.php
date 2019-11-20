@extends('layout')
@section('title')
    Đổi mật khẩu quản trị viên
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Đổi mật khẩu</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    action="" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Mật khẩu mới<span class="text-danger">*</span></label>
                        <input type="password" name="mat_khau_moi" placeholder="Nhập mật khẩu mới" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu mới<span class="text-danger">*</span></label>
                        <input type="password" name="mat_khau_moi_confirmation" placeholder="Nhập lại mật khẩu mới" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection