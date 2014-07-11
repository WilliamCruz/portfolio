@extends('layouts.master')

@section('content')

	@if (isset($post))
	
	<h1>Edit Post</h1>

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
	@else
	<h1>Create a New Post</h1>
	{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
	@endif

		<div>
			{{ Form::label('Name', 'First Name') }}<br>
			{{ Form::text('first_name', Input::old('first_name')) }}<br>
			{{ $errors->first('first_name', '<span class="help-block">:message</span><br>') }}
		</div>
		<div>
			{{ Form::label('Name', 'Last Name') }}<br>
			{{ Form::text('last_name', Input::old('last_name')) }}<br>
			{{ $errors->first('last_name', '<span class="help-block">:message</span><br>') }}
		</div>
		<div>
			{{ Form::label('role', 'Role') }}<br>
			{{ Form::text('role', Input::old('role')) }}<br>
			{{ $errors->first('role', '<span class="help-block">:message</span><br>') }}			
		</div>
		<br>
		<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Adminisrator</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">User</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Guest</a></li>
  </ul>
</div>
<br>
<br>
