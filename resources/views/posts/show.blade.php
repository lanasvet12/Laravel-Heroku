@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a class="btn btn-default" href="/posts">Go back</a>
				<h1 class="text-center">{{ $post->title }}</h1>
				<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
				<p>{!! $post->body !!}</p>
				<small>Created by {{ $post->user->name }}</small>
				<hr>
				@auth
					@if(Auth::user()->id == $post->user_id)
						<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit post</a>
						{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
			                {{ Form::hidden('_method', 'DELETE') }}
			                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
		            	{!! Form::close() !!}
		            @endif
            	@endauth
			</div>
		</div>
	</div>
@endsection