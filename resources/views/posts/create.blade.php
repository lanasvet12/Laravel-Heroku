@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Create Post</h1>
				{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<? echo Form::token(); ?>

			    <div class="form-group">
			    	{{ Form::label('title', 'Title') }}
			    	{{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Input title post'])}}
			    </div>
			    <div class="form-group">
			    	{{ Form::label('body', 'Body') }}
			    	{{ Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Input body post'])}}
			    </div>
			    <div class="form-group">
			    	{{ Form::file('cover_image') }}
			    </div>
			    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection