<?php

// User Routes
Route::group(['namespace' => 'User'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('post', 'HomeController@index');

    Route::get('post/{post}', 'PostController@post')->name('post');

    Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category}', 'HomeController@category')->name('category');
});

// Admin Routes
Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin', 'HomeController@index')->name('admin.home');
    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    // User routes
    Route::resource('admin/user', 'UserController');

    // Post routes
    Route::resource('admin/post', 'PostController');

    // Tag routes
    Route::resource('admin/tag', 'TagController');

    // Category routes
    Route::resource('admin/category', 'CategoryController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
