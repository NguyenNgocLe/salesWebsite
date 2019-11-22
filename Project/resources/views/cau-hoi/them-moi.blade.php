@extends('layout')

@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">
                    @if(isset($cauHoi))
                        Cập nhật
                    @else
                        Thêm
                    @endif
                        câu hỏi
                </h4>
                
                @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first()}}</strong>
                    </div>
                @endif
                
                @if(isset($cauHoi))
                    <form action="{{ route('cau-hoi.xu-ly-cap-nhat', ['$id' => $cauHoi->id]) }}" method="POST">
                @else
                    <form action="{{ route('cau-hoi.xu-ly-them-moi') }}" method="POST">
                @endif
                    @csrf
                        <div class="form-group">
                            <label for="noi_dung">Nội dung câu hỏi:</label>
                            <input type="text" class="form-control" id="noi_du" name="noi_dung" @if(isset($cauHoi)) value="{{ $cauHoi->noi_dung }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="ten_linh_vuc">Chọn lĩnh vực:</label>    
                            <select class="form-control" id="linh_vuc" name="linh_vuc">
                                @if (isset($listLinhVuc))
                                    @foreach($listLinhVuc as $linhVuc)
                                        <option @if(isset($cauHoi) && $linhVuc->id == $cauHoi->linh_vuc_id) selected @endif value="{{ $linhVuc->id }}"> {{ $linhVuc->ten_linh_vuc }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_a">Phương án A:</label>
                            <input type="text" class="form-control" id="phuong_an_a" name="phuong_an_a" @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_a }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_b">Phương án B:</label>
                            <input type="text" class="form-control" id="phuong_an_b" name="phuong_an_b" @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_b }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_c">Phương án C:</label>
                            <input type="text" class="form-control" id="phuong_an_c" name="phuong_an_c" @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_c }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_d">Phương án D:</label>
                            <input type="text" class="form-control" id="phuong_an_d" name="phuong_an_d" @if(isset($cauHoi)) value="{{ $cauHoi->phuong_an_d }}" @endif>
                        </div>
                        <div class="form-group">
                            <label for="dap_an">Đáp án:</label>
                            <input type="text" class="form-control" id="dap_an" name="dap_an" @if(isset($cauHoi)) value="{{ $cauHoi->dap_an }}" @endif>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            @if(isset($cauHoi))
                                Cập nhật
                            @else
                                Thêm
                            @endif
                                câu hỏi
                        </button>
                        <a href="{{ route('cau-hoi.danh-sach') }}" class="btn btn-warning waves-effect waves-light">
                            Hủy
                        </a>
                    </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
</div>
@endsection