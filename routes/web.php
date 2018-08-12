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
Route::group(['prefix'=> 'admin','middleware'=>'auth'],function(){
    Route::get('posts',[
    'uses' => 'PostController@index',
    'as'  => 'posts'
    ]);
    Route::get('post/create',[
    'uses' => 'PostController@create',
    'as'  => 'post.create'
    ]);
    Route::post('post/store',[
        'uses' => 'PostController@store',
        'as'   => 'post.store'
    ]);
    Route::get('post/delete/{id}',[
        'uses' => 'PostController@destroy',
        'as'   => 'post.delete'
    ]);
    Route::get('post/restore/{id}',[
        'uses' => 'PostController@restore',
        'as'   => 'post.restore'
    ]);
    Route::get('post/hard-delete/{id}',[
        'uses' => 'PostController@hardDelete',
        'as'   => 'post.hard-delete'
    ]);
    Route::get('post/trashed',[
        'uses' => 'PostController@trashed',
        'as'   => 'post.trashed'
    ]);
    Route::get('/category/create',[
        'uses' => 'CategoryController@create',
        'as' => 'category.create'
    ]);
    Route::get('categories',[
        'uses' => 'CategoryController@index',
        'as'   => 'categories'
    ]);
    Route::post('category/store',[
        'uses' => 'CategoryController@store',
        'as'   => 'category.store'
    ]);
});
