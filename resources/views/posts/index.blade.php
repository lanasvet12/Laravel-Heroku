@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Posts</h1>		
				@if(count($posts) > 1)
					@foreach($posts as $post)
					<div class="well">
						<h3>{{ $post->title }}</h3>
					</div>
					@endforeach
				@else
					<p>No posts found</p>
				@endif
			</div>
		</div>
	</div>
@endsection