<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check())
    {
    return view('default');
    }
    else {
        return view('auth.login');
    }
    
});

Route::get('/default', function () {
    return view('default');
});

Route::get('/drive', function () {
    return view('drive');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/document', function () {
    return view('document');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
