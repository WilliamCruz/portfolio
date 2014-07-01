@extends('layouts.master')

@section('content')

<h1>{{{ $post->title }}}</h1>
<h5>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</h5>
<p>{{{ $post->body }}}</p>
@stop