<?php

// Route::get('/URL','Controller名@viewファイル')
Route::get('/', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{category}', 'CategoriesController@show');


Route::get('/posts', 'PostsController@create');
Route::post('/posts', 'PostsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');