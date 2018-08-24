@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				@if(count($posts) > 0)
					@foreach($posts as $post)
					<div class="card">
				  		<div class="card-body">
				    		<h5 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h5>
				    		<p class="card-text">{!! $post->body !!}</p>
				  		</div>
					</div>
					@endforeach
					{{ $posts->links() }}
				@else
					<div class="alert-danger alert">No posts found</div>
				@endif
				
				
			</div>
		</div>
	</div>
@endsection