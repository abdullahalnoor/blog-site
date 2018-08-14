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

// Route::get('/', function () {
//     return view('frontend.welcome');
// });

 Route::get('/',[
    'uses' => 'WelcomeController@index',
    'as'  => 'index'
    ]);
 Route::get('/single/{id}',[
    'uses' => 'WelcomeController@detailPaage',
    'as'  => 'detail.page'
    ]);




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
    Route::get('post/edit/{id}',[
        'uses' => 'PostController@edit',
        'as'   => 'post.edit'
    ]);
    Route::post('post/update',[
        'uses' => 'PostController@update',
        'as'   => 'post.update'
    ]);

    // Tag

    Route::get('tag/create',[
        'uses' => 'TagController@create',
        'as'   => 'tag.create'
    ]);
    Route::post('tag/store',[
        'uses' => 'TagController@store',
        'as'   => 'tag.store'
    ]);
    // cateegory

    Route::get('categories',[
        'uses' => 'CategoryController@index',
        'as'   => 'categories'
    ]);
    Route::post('category/store',[
        'uses' => 'CategoryController@store',
        'as'   => 'category.store'
    ]);
    
    // user
    Route::get('users',[
        'uses' => 'UserController@inedx',
        'as'   => 'users'
    ]);
    Route::get('user/create',[
        'uses' => 'UserController@create',
        'as'   => 'user.create'
    ]);
    Route::post('user/store',[
        'uses' => 'UserController@store',
        'as'   => 'user.store'
    ]);
     Route::get('make/admin/{id}',[
        'uses' => 'UserController@makeAdmin',
        'as'   => 'make.admin'
    ]);
     Route::get('remove/admin/{id}',[
        'uses' => 'UserController@removeAdmin',
        'as'   => 'remove.admin'
    ]);
    // setting 
    Route::get('view/setting',[
        'uses' => 'SettingController@viewSetting',
        'as'   => 'view.setting'
    ]);
     Route::post('update/setting',[
        'uses' => 'SettingController@updateSetting',
        'as'   => 'update.setting'
    ]);
});
