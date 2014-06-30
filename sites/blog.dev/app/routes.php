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

// Route::get('/', function()
// {
// 	return 'hello';
// });


// Route::get('/sayhello/{name}', function($name)
// {
//     return "Hello, $name!";
// });


// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });

Route::get('/', function()
{
	return 'We are home.';
});
Route::get('/resume', function()
{
	return 'This is my resume.';
});
Route::get('/portfolio', function()
{
	return 'This is my portfolio.';
});