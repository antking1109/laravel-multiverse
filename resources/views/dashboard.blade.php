@extends('layouts.admin')
@section('pageTitle', 'Welcome !')
@section('bread', 'Dashboard')
@section('content')
	<div class="row">
	    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	        <div class="card-box tilebox-one">
	            <i class="fi-layers float-right"></i>
	            <h6 class="text-muted text-uppercase mb-3">IMAGE</h6>
	            <h4 class="mb-3"><span data-plugin="counterup">{{ $count }}</span></h4>
	            <span class="text-muted ml-2 vertical-middle"><a href="{{ asset('admin/image') }}">Quản lý</a></span>
	        </div>
	    </div>
	</div>
	<!-- end row -->
@endsection
