@extends('layouts.admin')
@section('pageTitle', 'SỬA HÌNH ẢNH')
@section('bread','Edit Image')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="p-20">
            <form class="form-horizontal" role="form" action="" method="POST">
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
		      	<center>
	      			<img src="{{ asset($image['url']) }}" alt="ảnh sửa" width="500" height="200">
		      	</center>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Tiêu đề</label>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Nhập tiêu đề hình ảnh" name="txtTitle" value="{{ old('txtTitle',$image['title']) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Mô tả</label>
                    <div class="col-10">
                        <textarea class="form-control" rows="5" name="txtDes">{{ old('txtDes',$image['des']) }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary waves-effect waves-light">Sửa ảnh</button>
            </form>
        </div>
    </div>
</div>
@endsection
