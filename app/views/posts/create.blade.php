@extends('layouts.master')

@section('content')

    <h1>Create New Post</h1>	
	
	{{ Form::open(array('action'=>'PostsController@store')) }}
		<div>
			{{ Form::label('title', 'Title:') }}<br>
			{{ Form::text('title') }}<br>
			{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
		</div>

		<div>
			{{ Form::label('body', 'Post Body:') }}<br>
			{{ Form::textarea('body') }}<br>
			{{ $errors->first('body', '<span class="help-block">:message</span><br>') }}
		</div>

		<div>
		  	{{ Form::submit('Submit') }}
		</div>

	{{ Form::close()}}	

@stop