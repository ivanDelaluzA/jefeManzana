<?php
Route::resource('appleBosses', 'AppleBossController');
Route::resource('functionary', 'FunctionaryController');

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Index routes...
Route::get('/', function () {   return view('appleBosses.index');   });


//Faq
Route::get('faq', function () {   return view('appleBosses.faq');   });

// PDF
Route::get('pdf', 'PdfController@invoice');

//AppleBosses
Route::get('constancia', 'AppleBossController@create');
Route::post('constancia', ['as' => 'dirconstancia', 'uses' => 'AppleBossController@invoice']);

Route::get('constancia2', 'AppleBossController@create2');