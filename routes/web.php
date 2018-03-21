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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Auth::routes();

Route::get('/', 'HomeController@index')->name('home');*/

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>['web']], function(){

    Route::get('/', ['middleware'=>['auth'], 'uses'=>'Admin\AdminController@show', 'as'=>'admin_index']);
    Route::get('/add/post', ['uses'=>'Admin\AdminPostController@create', 'as'=>'admin_add_post']);

});

//Route::get('/', 'HomeController@index')->name('home');
