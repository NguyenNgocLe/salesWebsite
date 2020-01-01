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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Danh sách</a></li>
                    <li class="breadcrumb-item active">Cấu hình trợ giúp</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách cấu hình trợ giúp</h4>
            <a href="{{ route('cau-hinh-tro-giup.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
            <br/><br/>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="text-muted font-13 mb-4">
                    DataTables danh sách cấu hình trợ giúp:
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Loại trợ giúp</th>
                            <th>Thứ tự</th>
                            <th>Credit</th>
                            <th>Cập nhật</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($cauHinhTroGiups))
                            @foreach($cauHinhTroGiups as $cauHinhTroGiup)
                            <tr>
                                <td>{{ $cauHinhTroGiup->id }}</td>
                                <td>{{ $cauHinhTroGiup->loai_tro_giup }}</td>
                                <td>{{ $cauHinhTroGiup->thu_tu }}</td>
                                <td>{{ $cauHinhTroGiup->credit }}</td>
                                <th>
                                    <a href="{{ route('cau-hinh-tro-giup.cap-nhat', ['$id' =>$cauHinhTroGiup->id]) }}" class="btn btn-purple waves-effect waves-light">
                                        <i class="mdi mdi-grease-pencil"></i>
                                    </a>
                                </th>
                                <th>
                                    <a href="{{ route('cau-hinh-tro-giup.xoa-bo', ['$id' =>$cauHinhTroGiup->id]) }}" class="btn btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-delete"></i>
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