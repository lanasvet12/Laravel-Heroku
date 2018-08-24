@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a class="btn btn-default" href="/posts">Go back</a>
				<h1 class="text-center">{{ $post->title }}</h1>
				<p>{!! $post->body !!}</p>
			</div>
		</div>
	</div>
@endsection