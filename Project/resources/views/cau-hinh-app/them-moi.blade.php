@extends('layout')

@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">
                    @if(isset($cauHinhApp))
                        Cập nhật
                    @else
                        Thêm
                    @endif
                        Cấu hình App
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

                @if(isset($cauHinhApp))
                    <form action="{{ route('cau-hinh-app.xu-ly-cap-nhat', ['$id' => $cauHinhApp->id]) }}" method="POST">
                @else
                    <form action="{{ route('cau-hinh-app.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                        <div class="form-group">
                            <label for="co_hoi_sai">Cơ hội sai:</label>
                            <input type="text" class="form-control" id="co_hoi_sai" name="co_hoi_sai" @if(isset($cauHinhApp)) value="{{ $cauHinhApp->co_hoi_sai }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="thoi_gian_tra_loi">Thời gian trả lời:</label>
                            <input type="text" class="form-control" id="thoi_gian_tra_loi" name="thoi_gian_tra_loi" @if(isset($cauHinhApp)) value="{{ $cauHinhApp->thoi_gian_tra_loi }}" @endif>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            @if(isset($cauHinhApp))
                                Cập nhật
                            @else
                                Thêm
                            @endif
                        </button>
                        <a href="{{ route('cau-hinh-app.danh-sach') }}" class="btn btn-warning waves-effect waves-light">
                            Hủy
                        </a>
                    </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
</div>
@endsection