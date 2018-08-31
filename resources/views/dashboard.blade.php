@extends('layouts.admin')
@section('pageTitle', 'Welcome !')
@section('bread', 'Dashboard')
@section('content')
	<div class="row">
	    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	        <div class="card-box tilebox-one">
	            <i class="fi-box float-right"></i>
	            <h6 class="text-muted text-uppercase mb-3">Orders</h6>
	            <h4 class="mb-3" data-plugin="counterup">1,587</h4>
	            <span class="badge badge-primary"> +11% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
	        </div>
	    </div>
	    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	        <div class="card-box tilebox-one">
	            <i class="fi-layers float-right"></i>
	            <h6 class="text-muted text-uppercase mb-3">Revenue</h6>
	            <h4 class="mb-3">$<span data-plugin="counterup">46,782</span></h4>
	            <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
	        </div>
	    </div>
	    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	        <div class="card-box tilebox-one">
	            <i class="fi-tag float-right"></i>
	            <h6 class="text-muted text-uppercase mb-3">Average Price</h6>
	            <h4 class="mb-3">$<span data-plugin="counterup">15.9</span></h4>
	            <span class="badge badge-primary"> 0% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
	        </div>
	    </div>
	    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
	        <div class="card-box tilebox-one">
	            <i class="fi-briefcase float-right"></i>
	            <h6 class="text-muted text-uppercase mb-3">Product Sold</h6>
	            <h4 class="mb-3" data-plugin="counterup">1,890</h4>
	            <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span>
	        </div>
	    </div>
	</div>
	<!-- end row -->
@endsection
