@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">
                    Thêm lượt chơi
                </h4>
                @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>{{ $errors->first() }}</strong>
                        </div>
                    @elseif(isset($msg))
                        <div class="alert alert-success">
                            <strong>{{ $msg }}</strong>
                        </div>
                @endif
                    <form action="{{ route('luot-choi.xu-ly-them-moi') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_nguoi_choi">ID người chơi:</label>
                            <input type="text" class="form-control" id="id_nguoi_choi" name="id_nguoi_choi">
                        </div>
                        <div class="form-group">
                            <label for="so_cau">Số câu:</label>
                            <input type="text" class="form-control" id="so_cau" name="so_cau">
                        </div>
                        <div class="form-group">
                            <label for="diem">Điểm:</label>
                            <input type="text" class="form-control" id="diem" name="diem">
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Thêm Lượt chơi
                        </button>
                        <a href="{{ route('luot-choi.danh-sach') }}" class="btn btn-warning waves-effect waves-light">
                            Hủy
                        </a>
                    </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    @endsection