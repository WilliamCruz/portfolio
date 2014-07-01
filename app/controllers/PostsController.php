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
		return $this->update(null);
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
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			return Redirect::action('PostsController@index');
		}
	}
}