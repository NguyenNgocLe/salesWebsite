@extends('layout')
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
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách</a></li>
                    <li class="breadcrumb-item active">Cấu hình</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách cấu hình</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="text-muted font-13 mb-4">
                    DataTables danh sách cấu hình:
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cơ hội sai</th>
                            <th>Thời gian trả lời</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($cauHinhApps))
                        @foreach($cauHinhApps as $cauHinhApp)
                        <tr>
                            <td>{{$cauHinhApp->id}}</td>
                            <td>{{$cauHinhApp->noi_dung}}</td>
                            <td>{{$cauHinhApp->phuong_an_a}}</td>
                            <td>{{$cauHinhApp->phuong_an_b}}</td>
                            <td>{{$cauHinhApp->phuong_an_c}}</td>
                            <td>{{$cauHoi->phuong_an_d}}</td>
                            <td>{{$cauHoi->dap_an}}</td>
                            <th>
                                <a href="{{ route('cau-hoi.cap-nhat', ['$id' => $cauHoi->id]) }}" class="btn btn-purple waves-effect waves-light">
                                    <i class="mdi mdi-grease-pencil">
                                    </i>
                                </a>
                                <a href="{{ route('cau-hoi.xoa', ['$id' => $cauHoi->id]) }}" class="btn btn-danger waves-effect waves-light">
                                    <i class="mdi mdi-delete">
                                    </i>
                                </a>
                            </th>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col -->
</div> 
@endsection