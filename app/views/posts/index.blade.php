@extends('layouts.master')

@section('content')

<h2>All Post</h2>

<table class="table table-striped">
	<tr>
		<th>Title</th>
		<th>Creation Date</th>
		<th>Action</th>
	</tr>
	@foreach ($posts as $post)
	<tr>
		<td>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</td>
		<td>{{{ $post->created_at }}}
		<td>{{ link_to_action('PostsController@show', $post->body, array($post->id)) }}</td>
	</tr>
	@endforeach
</table>
	{{ $posts->links() }} <br>
	{{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn btn-success']) }}

@stop
