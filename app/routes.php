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

//Default Directory loads the welcome page
Route::get('/', function()
{
    return View::make('welcome');
});

//Localhost/vote loads this view
Route::get('/vote', function()
{
    return View::make('vote');
});

//Localhost/results loads this view
Route::get('/results', function()
{
    return View::make('results');
});

Route::get('getTop5Today', 'VoteController@getTop5Today');

Route::get('getTop5AllTime', 'VoteController@getTop5AllTime');

Route::get('getTop5Week', 'VoteController@getTop5Week');

?>