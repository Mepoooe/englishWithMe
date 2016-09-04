<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ 
Route::get('/', function () {
    return view('/home');
});

Route::auth();
//pages
Route::get('/home', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/blog', 'HomeController@blog');
Route::get('/work', 'HomeController@work');
Route::get('/texts', 'HomeController@texts');
Route::get('/videos', 'HomeController@videos');
Route::get('/musics', 'HomeController@musics');
Route::get('/pictures', 'HomeController@pictures');
Route::get('/readMore', 'HomeController@readMore');

//404 Error
Route::get('404', function() { return view('404'); });

// Adminka
Route::group(['middleware' => 'admin'], function(){ 
    //тут роуты только для админа + авторизация
    Route::get('/adminka', 'AdminController@index'); 
    Route::get('/homeAdmin', 'AdminController@homeAdmin');
    Route::post('/homeAdmin', 'AdminController@baner');

    Route::get('/blogAdmin', 'AdminController@blogAdmin');
    Route::post('/addArticle', 'AdminController@addArticle');
});

Route::post('/sendLetter', 'HomeController@sendLetter');