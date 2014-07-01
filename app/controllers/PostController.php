<?

Class PostController extends \BaseController
{

	public function index()
	{
		return View::make('index');
	}

	public function create()
	{
		return View::make('posts/create');
	}


	public function store()
	{
		return Redirect::back()->withInput();
	}


	public function show($id)
	{
		return "Posts::show()";
	}
}