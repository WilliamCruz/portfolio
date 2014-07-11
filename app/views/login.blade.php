@extends('layouts.master')

@section('content')
<br>
<br>	
<div class="container">
	<div class="row">
	<br>
	<br>
	<table class="table">
		<div style="margin: 10px auto; text-align: center;">
			{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
			<h4 class="form-signin-heading"><span class="glyphicon glyphicon-lock"></span> Sign In<h4>
			{{ Form::label('email', 'Email') }} 
			{{ Form::email('email') }}
			<br>													
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
			<button type="submit" class="btn btn-success">Login</button>
		</div>
	</table>
	</div>
</div>
<br>
<br>
	{{ Form::close()}}


@stop