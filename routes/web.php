<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', ['as' => 'login', 'uses' => 'LoginController@getlogin']);
Route::post('admin/login', ['as' => 'login', 'uses' => 'LoginController@postlogin']);
Route::get('admin/signup', ['as' => 'signup', 'uses' => 'LoginController@getsignup']);
Route::post('admin/signup', ['as' => 'signup', 'uses' => 'LoginController@postsignup']);
