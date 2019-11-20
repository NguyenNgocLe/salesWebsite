@extends('layout')
@section('css')
@section('title')
    Trang đăng nhập 
@endsection
@section('main-content')
    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body p-4">
                                
                                <h5 class="auth-title">Đăng nhập</h5>

                                <form action="{{ route('quan-tri-vien.xu-ly-dang-nhap') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Tên đăng nhập</label>
                                        <input class="form-control" type="text" id="emailaddress" name="ten_dang_nhap" required="" placeholder="Tên đăng nhập">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Mật khẩu</label>
                                        <input class="form-control" type="password" required="" name="mat_khau" id="password" placeholder="Mật khẩu">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Nhớ mật khẩu</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Đăng nhập </button>
                                    </div>

                                </form>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Đăng nhập với...</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Bạn quên mật khẩu?</a></p>
                                <p class="text-muted">Bạn không có tài khoản? <a href="pages-register.html" class="text-muted ml-1"><b class="font-weight-semibold">Đăng ký</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    </body>
#endsection
