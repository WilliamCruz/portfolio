@extends('layouts.master')

@section('content')

	@if (isset($post))
	<h1>Edit Post</h1>
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	@else
	<h1>Create a New Post</h1>
	{{ Form::open(array('action' => 'PostsController@store')) }}
	@endif

	
		<div>
			{{ Form::label('title', 'Title:') }}<br>
			{{ Form::text('title', Input::old('title')) }}<br>
			{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
			{{ Form::label('body', 'Post Body:') }}<br>
			{{ Form::textarea('body') }}<br>
			{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
		  	{{ Form::submit('Save Post') }}
		</div>

	{{ Form::close() }}
@stop