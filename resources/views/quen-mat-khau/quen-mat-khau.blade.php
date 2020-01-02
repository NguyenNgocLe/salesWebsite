@extends('layout')
@section('title')
    Quên mật khẩu
@endsection
@section('main-content')
<body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body p-4">
                                @if(Session::has('success'))
						            <div class="alert alert-success">
						              {{Session::get('success')}}
						            </div>
						        @endif
                                <h5 class="auth-title">Lấy lại mật khẩu</h5>

                                <form action="{{route('quan-tri-vien.send-mail')}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-6">
                                        <label for="emailaddress">Email</label>
                                        <input class="form-control" type="text" id="emailaddress" name="email"  placeholder="Nhập email vào">
                                        <br>
                                        @if($errors->has('email'))
						                  <div class="alert alert-danger">
						                    {{ $errors->first('email') }}
						                  </div>
							            @endif
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit">Gửi xác nhận</button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <!-- end row -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    </body>
@endsection