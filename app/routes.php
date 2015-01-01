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

Route::get('/', 'HomeController@showIndex');
Route::get('/legal',function(){
    return View::make('legal');
});
Route::get('/login', 'LoginController@Login');
Route::get('/register', 'LoginController@showRegisterPage');
Route::post('/register', 'UserController@register');
Route::get('/login/callback', 'LoginController@Login_callback');
Route::get('/verifiy/generate', 'UserController@sendVerifiyEmail');
Route::get('/verifiy', 'UserController@Verifiy');
Route::group(['prefix'=>'issue'], function(){
    
    Route::group(['before'=>'auth'], function(){
        Route::get('/add','IssueController@showIssueAddPage');
        Route::post('/add','IssueController@addIssue');    
        Route::post('/{issue_id}/comment', 'CommentsController@addComments');
        Route::get('/{issue_id}/agree', 'IssueController@voteAgreeIssue');
        Route::get('/{issue_id}/disagree', 'IssueController@voteDisAgreeIssue');
    });
    Route::get('/{issue_id}', 'IssueController@showSingleIssuePage');
    
});
