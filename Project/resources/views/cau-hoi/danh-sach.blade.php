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
                    <li class="breadcrumb-item active">Câu hỏi</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách câu hỏi</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Thêm mới câu hỏi</h4>
                <a href="{{ route('cau-hoi.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới
                </a>
                <p class="text-muted font-13 mb-4">
                    DataTables danh sách câu hỏi:
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Lĩnh vực</th>
                            <th>Phương án A</th>
                            <th>Phương án B</th>
                            <th>Phương án C</th>
                            <th>Phương án D</th>
                            <th>Đáp án </th>
                            <th>Cập nhật</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($cauHois))
                        @foreach($cauHois as $cauHoi)
                        <tr>
                            <td>{{$cauHoi->id}}</td>
                            <td>{{$cauHoi->noi_dung}}</td>
                            <td>{{$cauHoi->LinhVuc->ten_linh_vuc}}</td>
                            <td>{{$cauHoi->phuong_an_a}}</td>
                            <td>{{$cauHoi->phuong_an_b}}</td>
                            <td>{{$cauHoi->phuong_an_c}}</td>
                            <td>{{$cauHoi->phuong_an_d}}</td>
                            <td>{{$cauHoi->dap_an}}</td>
                            <th>
                                <a href="{{ route('cau-hoi.cap-nhat', ['$id' => $cauHoi->id]) }}" class="btn btn-purple waves-effect waves-light">
                                    <i class="mdi mdi-grease-pencil">
                                    </i>
                                </a>
                            </th>
                            <th>
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