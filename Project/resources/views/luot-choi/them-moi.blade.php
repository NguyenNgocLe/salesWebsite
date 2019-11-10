{{-- @extends('layout')
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
                @if(isset($luotChoi))
                <form action="{{ route('luot-choi.xu-ly-cap-nhat', ['$id' => $luotChoi->id]) }}" method="POST">
                    @else
                    <form action="{{ route('luot-choi.them-moi') }}" method="POST">
                        @endif
                        @csrf
                        <div class="form-group">
                                <label for="id_nguoi_choi">ID người chơi:</label>
                                <select class="custom-select" id="nguoi_choi_id" name="nguoi_choi_id">
                                        <option>-Chọn ID người chơi-</option>
                                        @foreach($nguoiChoi as $list) <!-- -->
                                            <option @if(isset($cauHoi) && $linhVuc->id == $cauHoi->linh_vuc_id) selected @endif value="{{ $linhVuc->id }}"> {{ $linhVuc->ten_linh_vuc }}</option>
                                        @endforeach
                                </select>
                                <input type="text" class="form-control" id="nguoi_choi_id" name="nguoi_choi_id" @if(isset($luotChoi)) value="{{ $luotChoi->nguoi_choi_id }}" @endif>
                                <label for="ten_linh_vuc">Chọn lĩnh vực:</label>    
                                <select class="custom-select" id="linh_vuc" name="linh_vuc">
                                        <option>-Chọn Lĩnh vực-</option>
                                        @foreach($listLinhVuc as $linhVuc)
                                            <option @if(isset($cauHoi) && $linhVuc->id == $cauHoi->linh_vuc_id) selected @endif value="{{ $linhVuc->id }}"> {{ $linhVuc->ten_linh_vuc }}</option>
                                        @endforeach
                                </select>
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
    @endsection --}}