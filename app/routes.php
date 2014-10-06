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

Route::get('/resume', function(){
    
    return View::make('resume');
});

Route::get('/rolldice/{guess}', function($guess)
{
    $random = rand(1, 6);
    $data = [
        'random' => $random,
        'guess' => $guess
    ];
    return View::make('roll-dice', $data);
});


Route::get('/portfolio', function(){
    return View::make('portfolio');
});
