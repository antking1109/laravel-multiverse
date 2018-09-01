@extends('layouts.admin')
@section('pageTitle', 'THÊM HÌNH ẢNH')
@section('bread','Add Image')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="p-20">
            <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
            	@csrf
            	<div class="form-group">
                    @if (session('success'))
			          <div class="alert alert-success">
			                <p>{{ session('success') }}</p>
			          </div>
		            @endif
		            @if ($errors->any())
		                <div class="alert alert-danger">
			                <b>Lỗi!! Bạn vui vòng kiểm tra lại:</b>
			                  <ul>
			                      @foreach ($errors->all() as $error)
			                          <li>{{ $error }}</li>
			                      @endforeach
			                  </ul>
		                </div>
		            @endif
		      	</div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Tiêu đề</label>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Nhập tiêu đề hình ảnh" name="txtTitle" value="{{ old('txtTitle') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Mô tả</label>
                    <div class="col-10">
                        <textarea class="form-control" rows="5" name="txtDes">{{ old('txtDes') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Chọn hình ảnh</label>
                    <div class="col-10">
                        <input type="file" class="form-control" name="fileUpload">
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary waves-effect waves-light">Đăng ảnh</button>
            </form>
        </div>
    </div>
</div>
@endsection
