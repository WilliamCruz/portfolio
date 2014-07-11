@extends('layouts.master')

@section('content')

<h1>{{{ $post->name }}}</h1>
<h5>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h5>



@if ($post->img_path)
	<img src="{{{ $post->img_path }}}" class="img-responsive">
@endif

<p>
	{{ $post->renderBody() }}
</p>
<span class="help-block">
{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
	{{ Form::submit('Delete', array('class'=>'btn btn-danger form-group')) }}
{{ Form::close() }}
@stop