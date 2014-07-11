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
			{{ Form::label('title', 'Title:') }}<br>
			{{ Form::text('title', Input::old('title')) }}<br>
			{{ $errors->first('title', '<span class="help-block">:message</span><br>') }}
		</div>
	
		<div class="wmd-panel">
            <div id="wmd-button-bar"></div>
            <!-- <textarea class="wmd-input" id="wmd-input"> -->
            	{{ Form::textarea('body', Input::old('body'), array('class' => 'form-control wmd-input', 'id' => 'wmd-input') )}}
        </div >
        <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
		
		<div>
			{{ Form::label('image', 'Image') }}<br>
			{{ Form::file('image') }}<br>
			{{ $errors->first('image', '<span class="help-block">:message</span><br>') }}
		</div>
        <div class="form-group">
		  	<button type="submit" class="btn btn-success post-button">Submit</button>
		</div>		
	{{ Form::close() }}

	@yield('script')

		<link rel="stylesheet" type="text/css" href="/pageDown/demo.css" />

	    <script type="text/javascript" src="/pageDown/Markdown.Converter.js"></script>
	    <script type="text/javascript" src="/pageDown/Markdown.Sanitizer.js"></script>
	    <script type="text/javascript" src="/pageDown/Markdown.Editor.js"></script>

		<script type="text/javascript">
				var converter = Markdown.getSanitizingConverter();

				var editor = new Markdown.Editor(converter);

				editor.run();
		</script>
@stop




