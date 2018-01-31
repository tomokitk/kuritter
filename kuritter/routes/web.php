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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tweet','TweetController@tweet');
  //Route::get('/tweet','TweetController@tweet');
  //get post の違い？
  //'/tweet','TweetController@tweet'　
  //ツイート関連であれば、url と@以降をメソッド名に変える
Route::post('/store','TweetController@store');