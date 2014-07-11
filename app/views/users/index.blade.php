@extends('layouts.master')

@section('content')

<h2>All Users</h2>

<table class="table table-striped">
	<tr>
		<th>Name</th>
		<th>Author Email</td>
		<th>Creation Date</th>
		<th>Action</th>
	</tr>
	@foreach ($users as $user)
	<tr>
		<td>{{ $user->first_name }}</td>
		<td>{{ $user->last_name }}</td>
		<td>{{ $user->role }}</td>
		<td>{{ $user->email }}
		<td>{{{ $user->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
		<td>{{ link_to_action('UsersController@edit', 'Edit', array($user->id)) }}</td>
	</tr>
	@endforeach
</table>
	{{ link_to_action('UsersController@create', 'New user', [], ['class' => 'btn btn-success pull-right']) }}

	{{ Form::open(array('action' => 'UsersController@index', 'class' => 'form-inline', 'method' => 'GET' )) }}
        <div class="form-group">
        {{ Form::text('search', Input::get('search'), array('placeholder' => 'Search', 'class' => 'form-control col-lg-4')) }}
        <button type="submit" class="btn btn-success">Submit</button>
        <br>
        {{ $users->appends(['search' => Input::get('search')])->links() }}
        </div>
	
@stop