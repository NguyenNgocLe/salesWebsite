@extends('layout')
@section('title')
    Trang cá nhân
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Trang cá nhân</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xl-12">
            <div class="card-box text-center">
                <img src="{{ asset('assets/images/users/user-2.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                <h4 class="mb-0">{{ Auth::user()->ho_ten }}</h4>
                <p class="text-muted"></p>
                <a href="{{ route('quan-tri-vien.doi-ten', ['id' => Auth::user()->id]) }}" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Đổi tên</a>
                <a href="{{ route('quan-tri-vien.doi-mat-khau', ['id' => Auth::user()->id]) }}" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Đổi mật khẩu</a>

                <div class="text-left mt-3">
                    <h4 class="font-13 text-uppercase">Thông tin cá nhân</h4>
                    <p class="text-muted font-13 mb-3">
                        Chào các bạn, mình là {{ Auth::user()->ho_ten }}.<br>
                        Ngày 24/08/1999 là sinh nhật tôi.<br>
                        Tôi hiện là sinh viên năm 3 của trường Cao Đẳng Kỹ Thuật Cao Thắng. <i><b>"<a href="https://laravel.com/">PHP Laravel</a>"</b></i>
                    </p>
                    <p class="text-muted mb-2 font-13"><strong>Họ tên:</strong> <span class="ml-2"><strong>{{ Auth::user()->ho_ten }}</strong></span></p>
                    <p class="text-muted mb-2 font-13"><strong>Điện thoại: </strong><span class="ml-2">0123456789</span></p>
                    <p class="text-muted mb-2 font-13"><strong>Email: </strong> <span class="ml-2 ">ngoclecaothang@gmail.com</span></p>
                </div>

                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/LeNgoc2408" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection