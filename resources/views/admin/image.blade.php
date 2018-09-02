@extends('layouts.admin')
@section('pageTitle', 'QUẢN LÝ HÌNH ẢNH')
@section('bread','Image')
@section('content')
	<div class="row">
        <div class="col-12">
        	<div>
            	<button type="button" class="btn btn-success btn-rounded waves-light waves-effect w-md"><a href="{{ asset('admin/image/add') }}"><font color="white">Thêm ảnh</font></a></button>
            </div>
            @if(session('deldone'))
            	<script>
            		alert("{{ session('deldone') }}");
            	</script>
            @endif
            <div class="card-box">
                <table class="table">
                    <thead class="thead-dark">
	                    <tr>
	                        <th width="10%">#</th>
	                        <th width="20%">Tiêu đề</th>
	                        <th width="25%">Mô tả</th>
	                        <th width="15%">Thumb</th>
	                        <th width="10%">Người đăng</th>
	                        <th width="10%">Đăng lúc</th>
	                        <th>Hành động</th>
	                    </tr>
                    </thead>
                    <tbody>
	                    @foreach ($images as $image)
			                <tr>
			                	<td>{{ $image->id }}</td>
			                	<td>{{ $image->title }}</td>
			                	<td>{{ $image->des }}</td>
			                	<td><img src="{{ asset($image->url) }}" alt="{{ $image->des }}" width="150" height="100"></td>
			                	<td>
			                		{{
			                			DB::table('users')	->select('name')
															->where('id','=',$image->user_id)
															->get('name')[0]->name
			                		}}
			                	</td>
			                	<td>{{ $image->created_at }}</td>
			                	<td>
			                		<span class="badge badge-warning badge-pill"><a href="{{ url('admin/image/edit/'.$image->id) }}"><font color="white" size="3px">----Sửa----</font></a></span>
			                		<span class="badge badge-danger badge-pill"><a href="{{ url('admin/image/delete/'.$image->id) }}"><font color="white" size="3px">----Xóa----</font></a></span>
			                		<span class="badge badge-success badge-pill"><a href="{{ asset($image->url) }}" target="_blank"><font color="white" size="3px">----Xem----</font></a></span>
			                		
			                	</td>
			                </tr>
		                @endforeach
                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
		        {!! $images->links() !!}
		    </div>
        </div>
    </div>
@endsection