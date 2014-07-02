<?

Class PostsController extends \BaseController
{

	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	public function create()
	{
		return View::make('posts.create-edit');
	}


	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			// show error message
			session::flash('errorMessage', 'Post Error: Review fields');

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			session::flash('successMessage', 'Success');

			return Redirect::action('PostsController@index');
		}
	}	


	public function show($id)
	{
		$post = POST::find($id);
		return View::make('posts.show')->with('post', $post); 
	}

	public function edit ($id)
	{
		$post = POST::findOrFail($id);
		return View::make('posts.create-edit')->with('post', $post);
	}

	public function update ($id)
	{
		$post = POST::findOrFail($id);

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{	
			Session::flash('errorMessage', 'Edit Error: Review fields');

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', 'Edit was successful');

			return Redirect::action('PostsController@index');
		}
	}

	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post deleted successfully');

		return Redirect::action('PostsController@index');
	}
}










