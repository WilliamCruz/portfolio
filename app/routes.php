<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//login 
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');


//users
Route::resource('users', 'UsersController');

//resume/portfolio
Route::get('/Resume2014.doc.pdf', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');

//blog
Route::resource('/blog', 'PostsController');

Route::get('/orm-test', function() {
	// $posts = Post::all();

	foreach ($posts as $post) {
		echo $post->title . "<br>";
		echo $post->body . "<br>";
	}

	$post = Post::find(1);
		echo $post->title . "<br>";
		echo $post->body . "<br>";

		$post->title = "This is a New Title.";

		$post->save();


	return "Eloquent ORM is Eloquent";
});