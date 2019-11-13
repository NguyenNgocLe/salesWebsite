@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">
                    @if(isset($linhVuc))
                    Cập nhật
                    @else
                    Thêm
                    @endif
                    lĩnh vực
                </h4>

                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <strong>{{ $error }}</strong>
                        </div>
                    @endforeach
                    @elseif(isset($msg))
                        <div class="alert alert-success">
                            <strong>{{ $msg }}</strong>
                        </div>
                @endif

                @if(isset($linhVuc))
                <form action="{{ route('linh-vuc.xu-ly-cap-nhat', ['$id' => $linhVuc->id]) }}" method="POST">
                    @else
                    <form action="{{ route('linh-vuc.them-moi') }}" method="POST">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="ten_linh_vuc">Nhập tên lĩnh vực:</label>
                            <input type="text" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" @if(isset($linhVuc)) value="{{ $linhVuc->ten_linh_vuc}}" @endif>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            @if(isset($linhVuc))
                            Cập nhật
                            @else
                            Thêm
                            @endif
                            Lĩnh vực
                        </button>
                        <a href="{{ route('linh-vuc.danh-sach') }}" class="btn btn-warning waves-effect waves-light">
                            Hủy
                        </a>
                    </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    @endsection