<?

Class PostsController extends \BaseController
{



    public function __construct()
{
    // call base controller constructor
    parent::__construct();

    // run auth filter before all methods on this controller except index and show
    $this->beforeFilter('auth', array('except' => array('index', 'show')));
}


    public function index()
    {   //search by title
        $post = Post::with('user');

        if (Input::has("search")) {
            $search = Input::get('search'); 
            $posts = Post::where('title', 'LIKE', "%$search%");
        } 
        else
        {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(4);  
        }

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
            Session::flash('errorMessage', 'Post Error: Review fields');

            return Redirect::back()->withInput()->withErrors($validator);
        }
        else
        {
            $post = new Post();
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->user_id = Auth::user()->id;
            $post->save();

            if (Input::hasFile('image') && Input::file('image')->isValid()) {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            }

            session::flash('successMessage', 'Success');

            return Redirect::action('PostsController@index');
        }
    }   


    public function show($id)
    {
        $post = Post::find($id);
        return View::make('posts.show')->with('post', $post); 
    }

    public function edit ($id)
    {
        $post = Post::findOrFail($id);
        return View::make('posts.create-edit')->with('post', $post);
    }

    public function update ($id)
    {
        $post = Post::findOrFail($id);

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

            if (Input::hasFile('image') && Input::file('image')->isValid()) {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            }

            Session::flash('successMessage', 'Edit was successful');

            return Redirect::action('PostsController@show', $post->id);
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
