@extends('layouts.master')

@section('content')	
	
	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
	<h2 class="form-signin-heading"><span class="glyphicon glyphicon-lock"></span> Sign In<h2>
	{{ Form::label('email', 'Email') }} 
	{{ Form::email('email') }}
	{{ Form::label('password', 'Password') }}
	{{ Form::password('Password') }}
	<button type="submit" class="btn btn-success">Login</button>

	{{ Form::close()}}


@stop