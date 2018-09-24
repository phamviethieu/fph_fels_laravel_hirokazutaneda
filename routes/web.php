<?php

// Route::get('/URL','Controller名@viewファイル')
Route::get('/','TestsController@index')->name('home');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');