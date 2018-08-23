@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">{{ $post->title }}</h1>
				<p>{{ $post->body }}</p>
			</div>
		</div>
	</div>
@endsection