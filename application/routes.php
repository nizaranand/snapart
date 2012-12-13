<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array('uses'=>'home@index'));
#Users Route Controllers
Route::get('/join', array('uses'=>'users@signup', 'before'=>'auth'));
Route::get('/login', array('uses'=>'users@login', 'before'=>'auth'));
Route::get('/logout', array('uses'=>'users@logout'));
Route::post('users/validate_registration', array('as'=>'users/validate_registration', 'uses'=>'users@validate_registration'));
Route::post('users/validate_login', array('as'=>'users/validate_login', 'uses'=>'users@validate_login'));

#Profile Routes
Route::get('(:any)', array('as'=>'(:any)', 'uses'=>'profile@index'));
Route::get('(:any)/gallery', array('as'=>'(:any)/gallery', 'uses'=>'profile@gallery'));
/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::user()) return Redirect::to('/');
});