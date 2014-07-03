@extends('layouts.master')

@section('content')

<h2>All Post</h2>

<table class="table table-striped">
	<tr>
		<th>Title</th>
		<th>Author Email</td>
		<th>Creation Date</th>
		<th>Action</th>
	</tr>
	@foreach ($posts as $post)
	<tr>
		<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
		<td>{{ $post->user->email }}
		<td>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</td>
		<td>{{ link_to_action('PostsController@edit', 'Edit', array($post->id)) }}</td>
	</tr>
	@endforeach
</table>
	{{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn btn-success pull-right']) }}

	{{ Form::open(array('action' => 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET' )) }}
        <div class="form-group">
        {{ Form::text('search', Input::get('search'), array('placeholder' => 'Search', 'class' => 'form-control col-lg-4')) }}
        <button type="submit" class="btn btn-success">Submit</button>
        <br>
        {{ $posts->appends(['search' => Input::get('search')])->links() }}
        </div>
	
@stop
