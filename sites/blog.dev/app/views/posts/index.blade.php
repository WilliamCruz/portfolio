@extends('layouts.master')

@section('content')
<h1>Post All</h1>
@foreach ($posts as $post)
	{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}<br>
	{{ link_to_action('PostsController@show', $post->body, array($post->id)) }}<br>
@endforeach
@stop
