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

Route::group(['middleware' => ['web']], function () {

    // Post's URLs with slugs.
    Route::get('blog/{slug}', array('as' => 'blog.single', 'uses' => 'BlogController@getSingle'))->where('slug', '[\w\d\-\_]+');
    Route::get('/', array('uses' => 'BlogController@getIndex', 'as' => 'blog.index'));

    // Post's routes.
    Route::resource('posts', 'PostController');

    // User's routes.
    Route::resource('user', 'UserController');


    // Routes for the comment elements.
    Route::post('comments/{post_id}', array('uses' => 'CommentsController@store', 'as' => 'comments.store'));
    Route::get('comments/{id}/edit', array('uses' => 'CommentsController@edit', 'as' => 'comments.edit'));
    Route::patch('comments/{id}', array('uses' => 'CommentsController@update', 'as' => 'comments.update'));
    Route::delete('comments/{id}', array('uses' => 'CommentsController@destroy', 'as' => 'comments.destroy'));
    Route::get('comments/{id}/delete', array('uses' => 'CommentsController@delete', 'as' => 'comments.delete'));

    // My profile page.
//    Route::get('/{id}/myprofile', array('uses' => 'UserController@index', 'as' => 'profile.my_profile'));

});

// Logout.
Route::get('auth/logout', 'Auth\LoginController@logout');
Auth::routes();
