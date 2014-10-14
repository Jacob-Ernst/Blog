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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@doLogout');

Route::get('/resume', 'HomeController@showResume');

Route::get('/rolldice/{guess}', function($guess)
{
    $random = rand(1, 6);
    $data = [
        'random' => $random,
        'guess' => $guess
    ];
    return View::make('roll-dice', $data);
});

Route::get('orm-test', function ()
{
    // test code here
});

Route::resource('posts', 'PostsController');

Route::get('/portfolio', 'HomeController@showPortfolio');
