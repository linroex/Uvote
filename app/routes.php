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
    if(Session::has('fb_token')){
        Facebook::setAccessToken(Session::get('fb_token'));
    }else{
        return Redirect::to('/login');
    }
    
});
Route::get('/login', 'LoginController@Login');
Route::get('/login/callback', 'LoginController@Login_callback');
