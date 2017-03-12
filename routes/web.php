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
Route::group(['middleware'=>['web']],function(){
	Auth::routes();
	Route::get('/', 'pageController@index');
});

Route::group(array('before' => 'auth'), function(){
	Route::resource('posts', 'postController');
	Route::get('/about', 'pageController@about');
	Route::get('/create', 'postController@create');
	Route::post('/store', 'postController@store');

/*
manuel
Route::get('/posts/{id}', 'postController@show');
Route::get('/posts/{id}/edit', 'postController@edit');
Route::get('/posts', 'postController@index');
Route::post('/posts/{id}', 'postController@update');
Route::get('/posts/{id}/delete', ['as' => 'posts.destroy', 'uses' => 'postController@destroy']);
*/
	Route::get('/contact', 'pageController@contact');
	Route::get('/', 'pageController@index');
	Route::get('/home', 'HomeController@index');
});