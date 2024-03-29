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


//Route::get('/post/create', [
//   'uses' => 'PostsController@create',
//    'as' => 'post.create'
//]);
Route::group(['prefix' => 'admin', 'middleware'], function (){
    Route::resource('post','PostsController');

    Route::resource('category','CategoryController');

    Route::get('/home', 'HomeController@index')->name('home');

});
