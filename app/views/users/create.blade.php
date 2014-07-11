@extends('layouts.master')

@section('content')

    <h1 class="form-horizontal">Provide the following information:</h1>	
	
	{{ Form::open(array('action'=>'PostsController@store')) }}
		<div>
			{{ Form::label('first_name', 'First Name') }}<br>
			{{ Form::label('last_name', 'Last Name') }}<br>
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