@extends('layouts.admin')
@section('pageTitle', 'MY ACCOUNT')
@section('bread','My Account')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="header-title m-t-0">Thông tin cá nhân</h4>
            <form action="" novalidate="" method="POST" enctype="multipart/form-data">
            	{{ csrf_field() }}
                    @if (session('success'))
                    <div class="alert alert-success">
                        <p>{{session('success')}}</p>
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
            	<div class="form-group">
            		<label>Avatar</label>
            		<center>
            			<img src="{{ asset($user->avatar) }}" alt="avatar" width="150" height="100">
            		</center>
            		<input type="file" class="form-control" name="fileUpload">
            	</div>
                <div class="form-group">
                    <label for="userName">User Name</label>
                    <input type="text" name="txtName" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName" value="{{ old('txtName', $user->name) }}">
                </div>
                <div class="form-group">
                    <label for="emailAddress">Email address</label>
                    <input type="email" name="txtEmail" parsley-trigger="change" required="" placeholder="Enter email" class="form-control" id="emailAddress" value="{{ old('txtEmail', $user->email) }}">
                </div>
                <div class="form-group row">
                    <label for="hori-pass1" class="col-4 col-form-label">New Password<span class="text-danger">*</span></label>
                    <div class="col-7">
                        <input id="hori-pass1" type="password" placeholder="Password" required="" class="form-control" name="txtPass">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hori-pass2" class="col-4 col-form-label">Confirm Password
                        <span class="text-danger">*</span></label>
                    <div class="col-7">
                        <input data-parsley-equalto="#hori-pass1" type="password" required="" placeholder="Password" class="form-control" id="hori-pass2" name="txtCPass">
                    </div>
                </div>
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-gradient waves-effect waves-light" type="submit">
                        Thay đổi thông tin
                    </button>
                </div>
            </form>
        </div>
        <!-- end card-box -->
    </div>
</div>

@endsection