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

    // Post URLs with slugs.
    Route::get('blog/{slug}', array('as' => 'blog.single', 'uses' => 'BlogController@getSingle'))->where('slug', '[\w\d\-\_]+');

    Route::get('blog', array('uses' => 'BlogController@getIndex', 'as' => 'blog.index'));

    // Home page.
    Route::get('/', 'PagesController@getIndex');
    // About me page.
    Route::get('about', 'PagesController@getAbout');
    // Contact me page.
    Route::get('contact', 'PagesController@getContact');
    // Routes of post resource.
    Route::resource('posts', 'PostController');

});

Route::get('auth/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index');
