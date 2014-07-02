@extends('layouts.master')

@section('content')

<h1>{{{ $post->title }}}</h1>
<h5>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h5>
<p>{{{ $post->body }}}</p>

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
	{{ Form::submit('Delete') }}
{{ Form::close() }}

@stop