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
                    <li class="breadcrumb-item active">Gói Credit</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách gói Credit</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    @if(session('cap-nhat'))
    <script type="text/javascript">Swal.fire({
            icon: 'success',
            title: '{{session('cap-nhat')}}',
            showConfirmButton: false,
            timer: 4000
    })</script>
    @endif
    @if (session('cap-nhat-xoa'))
        <script type="text/javascript">Swal.fire({
            title: 'Bạn có chắc xóa không?',
            text: "Bạn sẽ không thể khôi phục gói credit này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa!'
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Đã xóa!',
                'Gói credit đã được xóa.',
                'success'
              )
            }
          })</script>
    @endif
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Thêm gói credit</h4>
                <a href="{{ route('goi-credit.them-moi') }}" class="btn btn-primary waves-effect waves-light">Thêm mới
                </a>
                <p class="text-muted font-13 mb-4">
                    DataTables danh sách gói credit:
                </p>
                <table class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên gói</th>
                            <th>Credit</th>
                            <th>Số tiền</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($goiCredits))
                        @foreach($goiCredits as $goiCredit)
                        <tr>
                            <th>{{$goiCredit->id}}</th>
                            <th>{{$goiCredit->ten_goi}}</th>
                            <th>{{$goiCredit->credit}}</th>
                            <th>{{$goiCredit->so_tien}}</th>
                            <th>
                                <a href="{{ route('goi-credit.cap-nhat', ['$id' =>$goiCredit->id]) }}" class="btn btn-purple waves-effect waves-light">
                                    <i class="mdi mdi-grease-pencil"></i>
                                </a>
                            </th>
                            <th>
                                <a href="{{ route('goi-credit.xoa', ['$id' =>$goiCredit->id]) }}" class="btn btn-danger waves-effect waves-light">
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
    </div><!-- end col-->
</div>
@endsection