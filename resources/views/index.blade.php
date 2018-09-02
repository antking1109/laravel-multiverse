@extends('layouts.site')
@section('title', $settings['title'])
@section('des', $settings['des'])
@section('favicon', asset($settings['favicon']))
@section('header_code')
	<?= $settings['header_code'] ?>
@endsection
@section('content')
	@foreach($images as $image)
	    <article class="thumb">
			<a href="{{ asset($image['url']) }}" class="image">
				<span>
					<center><img src="{{ asset($image['url']) }}" alt="{{ $image['title'] }}" width="440" height="285" /></center>
				</span>
			</a>
			<h2>{{ $image['title'] }}</h2>
			<p>{{ $image['des'] }}</p>
		</article>
	@endforeach
	{!! $images->links() !!}
@endsection
@section('twitter', asset($settings['twitter']))
@section('facebook', asset($settings['facebook']))
@section('instagram', asset($settings['instagram']))
@section('github', asset($settings['github']))
@section('linkedin', asset($settings['linkedin']))
@section('copyright')
	<?= $settings['copyright'] ?>
@endsection
