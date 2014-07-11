@extends('layouts.master')

@section('content')

<!-- <div id="aboutwrap">
 -->	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/aboutwrap -->
	
	<div class="container">
		<div class="row mt mb">
			<div class="col-lg-8 col-lg-offset-2">

					@foreach ($posts as $post)
						<h4>{{ link_to_action('PostsController@show', $post->title, array($post->id)) }}</h4>		
						<h6>{{ $post->user->email}}</h6>
						{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}
						{{ link_to_action('PostsController@edit', 'Edit', array($post->id)) }}
						
							<a href="#" class="deletePost btn btn-default btn-sm" data-postid="{{ $post->id }}">Delete</a>
						</td>
						{{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}

					@endforeach
			</div>

		</div><! --/row -->
	</div><! --/container -->

<h2>All Post</h2>


	{{ link_to_action('PostsController@create', 'New Post', [], ['class' => 'btn btn-success pull-right']) }}

	{{ Form::open(array('action' => 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET' )) }}
        <div class="form-group">
        {{ Form::text('search', Input::get('search'), array('placeholder' => 'Search', 'class' => 'form-control col-lg-4')) }}
        <button type="submit" class="btn btn-success">Submit</button>
        <br>
        {{ $posts->appends(['search' => Input::get('search')])->links() }}
        </div>

   {{ Form::close() }}
@stop

@section('bottomscript')

    <script type="text/javascript">
	   $(".deletePost").click(function() {
	       var postId = $(this).data('postid');
	       $("#deleteForm").attr('action', '/posts/' + postId);
	       if(confirm("Are you sure you want to delete post")) {
	           $('#deleteForm').submit();
	       }
	   });
	</script>
	
@stop
