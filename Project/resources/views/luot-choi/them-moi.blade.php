@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">
                    @if(isset($luotChoi))
                    Cập nhật
                    @else
                    Thêm
                    @endif
                    lượt chơi
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
                @if(isset($luotChoi))
                <form action="{{ route('luot-choi.xu-ly-cap-nhat', ['$id' => $luotChoi->id]) }}" method="POST">
                    @else
                    <form action="{{ route('luot-choi.them-moi') }}" method="POST">
                        @endif
                        @csrf
                        <div class="form-group">
                                <label for="id_nguoi_choi">ID người chơi:</label>
                                <input type="text" class="form-control" id="nguoi_choi_id" name="nguoi_choi_id" @if(isset($luotChoi)) value="{{ $luotChoi->nguoi_choi_id }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="so_cau">Số câu:</label>
                            <input type="text" class="form-control" id="so_cau" name="so_cau" @if(isset($luotChoi)) value="{{ $luotChoi->so_cau }}" @endif>
                        </div>
                        <div class="form-group">
                                <label for="diem">Điểm:</label>
                                <input type="text" class="form-control" id="diem" name="diem" @if(isset($luotChoi)) value="{{ $luotChoi->diem }}" @endif>
                            </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            @if(isset($luotChoi))
                            Cập nhật
                            @else
                            Thêm
                            @endif
                            Lượt chơi
                        </button>
                        <a href="{{ route('luot-choi.danh-sach') }}" class="btn btn-warning waves-effect waves-light">
                            Hủy
                        </a>
                    </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    @endsection
     {{-- dang lam toi day --}}