@extends('layouts.admin')
@section('pageTitle', 'CẤU HÌNH WEBSITE')
@section('bread','Setting')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0">Các tùy chính website</h4>
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
                    <label>Favicon</label>
                    <center>
                        <img src="{{ asset($setting['favicon']) }}" alt="favicon" width="50" height="50">
                    </center>
                    <input type="file" class="form-control" name="fileUpload">
                </div>
                <div class="form-group">
                    <label for="userName">Title (Tiêu đề website)</label>
                    <input type="text" name="txtTitle" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName" value="{{ old('txtTitle', $setting['title'])}}">
                </div>
                <div class="form-group">
                    <label>Des (Mô tả website)</label>
                    <div>
                        <textarea required="" class="form-control" name="txtDes"> {{ old('txtDes', $setting['des'])}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Header Code</label>
                    <div>
                        <textarea required="" class="form-control" name="txtHear"> {{ old('txtHear', $setting['header_code'])}}</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Copyright</label>
                    <div>
                        <textarea required="" class="form-control" name="txtCopyright"> {{ old('txtCopyright', $setting['copyright'])}}</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="userName">Twitter</label>
                    <input type="text" name="txtTwitter" parsley-trigger="change" required="" placeholder="Enter link twitter" class="form-control" id="userName" value="{{ old('txtTwitter', $setting['twitter'])}}">
                </div>
                <div class="form-group">
                    <label for="userName">Facebook</label>
                    <input type="text" name="txtFacebook" parsley-trigger="change" required="" placeholder="Enter link facebook" class="form-control" id="userName" value="{{ old('txtFacebook', $setting['facebook'])}}">
                </div>
                <div class="form-group">
                    <label for="userName">Instagram</label>
                    <input type="text" name="txtInstagram" parsley-trigger="change" required="" placeholder="Enter link Instagram" class="form-control" id="userName" value="{{ old('txtInstagram', $setting['instagram'])}}">
                </div>
                <div class="form-group">
                    <label for="userName">GitHub</label>
                    <input type="text" name="txtGitHub" parsley-trigger="change" required="" placeholder="Enter link GitHub" class="form-control" id="userName" value="{{ old('txtGitHub', $setting['github'])}}">
                </div>
                <div class="form-group">
                    <label for="userName">LinkedIn</label>
                    <input type="text" name="txtLinkedIn" parsley-trigger="change" required="" placeholder="Enter link LinkedIn" class="form-control" id="userName" value="{{ old('txtLinkedIn', $setting['linkedin'])}}">
                </div>
                <div class="form-group">
                    <label for="userName">Mail (Mail để gửi feedBack)</label>
                    <input type="text" name="txtMail" parsley-trigger="change" required="" placeholder="Enter link Mail" class="form-control" id="userName" value="{{ old('txtMail', $setting['mail'])}}">
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