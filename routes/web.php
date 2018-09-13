<?php

// User Routes
Route::group(['namespace' => 'User'], function(){
    Route::get('/', 'HomeController@index');

    Route::get('post/{post}', 'PostController@post')->name('post');
});

// Admin Routes
Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    Route::resource('admin/user', 'UserController');

    Route::resource('admin/post', 'PostController');

    Route::resource('admin/tag', 'TagController');

    Route::resource('admin/category', 'CategoryController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
