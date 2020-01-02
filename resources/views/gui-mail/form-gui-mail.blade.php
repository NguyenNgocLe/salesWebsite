@extends('layout')
@section('title')
    Gui Mail
@endsection
@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection
@section('js')
<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- Datatables init -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

<!-- third party js ends -->
@endsection
@section('main-content')
    <div class="container">
        <div class="contein">
            <form action="{{ route('gui-mail') }}" method="post" class="">
                @csrf
                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-8">
                        @if (Session::has('success'))
                            <div class="alert alert-danger">
                                {{ Session::get('success')}}
                            </div>
                        @endif
                        @if ($errors->has('send_email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('send_email')}}
                            </div>
                        @endif
                            <h5>Gửi tin nhắn đến mail</h5>
                        <div class="space20">
                            &nbsp;
                        </div>
                        <input type="text" id="send_email" name="send_email" class="form-control" placeholder="Nhập tên Email để lấy mã">
                        <br>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Gui yeu cau</button>
                        </div>
                    </div>
                    <div class="col-sm-2">
                    </div>
                </div>
            </form>            
        </div>
    </div>
@endsection