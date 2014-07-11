<?php


class UsersController extends \BaseController {

	public function __construct()
	{
		parent::__construct();
    	$this->beforeFilter('auth'); // check user role == admin
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{   //search by title
        $user = User::with('post');

        if (Input::has("search")) {
            $search = Input::get('search'); 
            $users = Post::where('title', 'LIKE', "%$search%");
        } 
        else
        {
            $users = User::orderBy('created_at', 'DESC')->paginate(4);  
        }

        return View::make('users.index')->with('users', $users);
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users.create-edit');
    }
	


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails())
        {
            // show error message
            Session::flash('errorMessage', 'User Error: Review fields');

            return Redirect::back()->withInput()->withErrors($validator);
        }
        else
        {
            $user = new User();
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->role = Input::get('role');
            $user->save();

            if (Input::hasFile('image') && Input::file('image')->isValid()) {
                $user->addUploadedImage(Input::file('image'));
                $user->save();
            }

            session::flash('successMessage', 'Success');
            return Redirect::action('UsersController@index');
        }
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::find($id);
        return View::make('users.show')->with('user', $user); 
    }

   
    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id)
    {
        $user = User::findOrFail($id);
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails())
        {   
            Session::flash('errorMessage', 'Edit Error: Review fields');
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else
        {
            $user->title = Input::get('title');
            $user->body = Input::get('body');
            $user->save();

            if (Input::hasFile('image') && Input::file('image')->isValid()) {
                $user->addUploadedImage(Input::file('image'));
                $user->save();
            }

            Session::flash('successMessage', 'Edit was successful');
            return Redirect::action('UsersController@show', $user->id);
        }
    }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit ($id)
    {
        $user = User::findOrFail($id);
        return View::make('users.create-edit')->with('user', $user);
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('successMessage', 'User deleted successfully');
        return Redirect::action('UsersController@index');
    }


}
