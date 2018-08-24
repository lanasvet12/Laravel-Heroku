@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a class="btn btn-default" href="/posts">Go back</a>
				<h1 class="text-center">{{ $post->title }}</h1>
				<p>{!! $post->body !!}</p>
				<hr>
				<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit post</a>
				{!! Form::open(['action' => ['PostsController@destroy', $post->id]]) !!}
				{!! Form::hidden('_method' => 'DELETE') !!}
				{!! Form::submit('Delete post', ['class' => 'btn btn-danger'])}

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection