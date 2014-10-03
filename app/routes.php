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

Route::get('/resume/{who}', function($isemployer){
    if ($isemployer = 'yes') {
        return Redirect::to('http://google.com');
    }
    return "Este es mi resume, brutha!";
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
    return "Este es mi portfolio, brutha!";
});
