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
<!-- sweet alert -->
<script src= "{{ asset('assets/js/pages/initialize/xoa.js') }}"></script>
<!-- third party js ends -->
@endsection
@section('main-content')
@if(session('cap-nhat'))
<script type="text/javascript">Swal.fire({
        icon: 'success',
        title: '{{session('cap-nhat')}}',
        showConfirmButton: false,
        timer: 4000
})</script>
@endif

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị viên</a></li>
                    <li class="breadcrumb-item active">Danh sách quản trị viên</li>
                </ol>
            </div>
            <h4 class="page-title">Quản trị viên</h4>
            <a href="{{ route('quan-tri-vien.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
            <br/><br/>
            @if (isset($quanTriViens))
                <a href="{{ route('quan-tri-vien.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem quản trị viên đã xóa</a>
            @endif
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ tên</th>
                            <th>Cập nhật</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($quanTriViens))
                            @foreach ($quanTriViens as $quanTriVien)
                                <tr>
                                    <td>{{ $quanTriVien->id }}</td>
                                    <td>{{ $quanTriVien->ten_dang_nhap }}</td>
                                    <td>{{ $quanTriVien->ho_ten }}</td>
                                    <td>
                                        <a href="{{ route('quan-tri-vien.cap-nhat', ['$id' =>$quanTriVien->id]) }}" class="btn btn-purple waves-effect waves-light">
                                            <i class="mdi mdi-grease-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('quan-tri-vien.xoa', ['$id' =>$quanTriVien->id]) }}" class="btn btn-danger waves-effect waves-light">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @foreach ($onlyTrasheds as $quanTriVien)
                            <tr>
                                <td>{{ $quanTriVien->id }}</td>
                                <td>{{ $quanTriVien->ten_dang_nhap }}</td>
                                <td>{{ $quanTriVien->ho_ten }}</td>
                                <td>
                                    <a href="{{ route('quan-tri-vien.khoi-phuc', ['$id' =>$quanTriVien->id]) }}" class="btn btn-purple waves-effect waves-light">
                                        Khôi phục
                                    </a>
                                </td>
                                <td>
                                    <button class="btn btn-danger waves-effect waves-light xoa-luon" 
                                    data-href="{{ route('quan-tri-vien.xoa-bo', ['$id' =>$quanTriVien->id]) }}">Xóa luôn </button>
                                </th>
                            </tr>
                        @endforeach   
                        @endif
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection
