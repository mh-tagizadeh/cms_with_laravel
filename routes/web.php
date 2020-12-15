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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('categories', 'CategoriesController');
    
    Route::resource('tags', 'TagsController');

    Route::resource('posts', 'PostController')->middleware('auth');

    Route::get('trashed-posts', 'PostController@trashed')->name('trashed-posts.index');

    Route::put('restore-post/{post}', 'PostController@restore')->name('restore-posts');
    
});



    
Route::middleware(['admin', 'auth'])->group(function ()
{
    Route::get('users', 'UsersController@index' )->name('users.index');
    
    Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');

    Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');

    Route::put('users/profile', 'UsersController@update')->name('users.update-profile');

});