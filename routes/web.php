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

Route::get('/', 'PublicController@index' )->name('index');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::post('contact', 'PublicController@contactPost')->name('contactPost');
Route::get('about', 'PublicController@about')->name('about');
Route::get('post/{id}', 'PublicController@singlePost')->name('singlePost');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('user')->group(function(){
    Route::get('dashboard' , 'userController@dashboard')->name('usersDashboard');
    Route::get('comments' , 'userController@comments')->name('usersComments');
});

Route::prefix('author')->group(function(){
    Route::get('dashboard' , 'authorController@dashboard')->name('authorDashboard');
    Route::get('posts' , 'authorController@posts')->name('authorPosts');
    Route::get('comments' , 'authorController@commnets')->name('authorComments');
});

Route::prefix('admin')->group(function(){
    Route::get('dashboard' , 'adminController@dashboard')->name('adminDashboard');
    Route::get('posts' , 'adminController@posts')->name('adminPosts');
    Route::get('comments' , 'adminController@comments')->name('adminComments');
    Route::get('users' , 'adminController@users')->name('adminUsers');
  
});
