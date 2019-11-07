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
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Responsive Table</li>
                    </ol>
                </div>
                <h4 class="page-title">Câu hỏi</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="responsive-table-plugin">
                    <div class="table-rep-plugin">
                        
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Nội dung</th>
                                        <th data-priority="3">Phương án A</th>
                                        <th data-priority="1">Phương án B</th>
                                        <th data-priority="3">Phương án C</th>
                                        <th data-priority="3">Phương án D</th>
                                        <th data-priority="6">Đáp án </th>
                                        <th data-priority="6">Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($cauHois))
                                        @foreach($cauHois as $cauHoi)
                                        <tr>
                                            <td>{{$cauHoi->id}}</td> 
                                            <td>{{$cauHoi->noi_dung}}</td>
                                            <td>{{$cauHoi->phuong_an_a}}</td>
                                            <td>{{$cauHoi->phuong_an_b}}</td>
                                            <td>{{$cauHoi->phuong_an_c}}</td>
                                            <td>{{$cauHoi->phuong_an_d}}</td>
                                            <td>{{$cauHoi->dap_an}}</td>
                                            <th>
                                                <a href="" class="btn btn-purple waves-effect waves-light">
                                                    <i class="mdi mdi-grease-pencil">
                                                    </i>
                                                </a>
                                                <a href="" class="btn btn-danger waves-effect waves-light">
                                                    <i class="mdi mdi-delete">
                                                    </i>
                                                </a>
                                            </th>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive -->
                    </div> <!-- end .table-rep-plugin-->
                </div> <!-- end .responsive-table-plugin-->
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection