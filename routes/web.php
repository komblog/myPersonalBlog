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

//Route::get('/');

Auth::routes();

Route::get('/', 'BlogController@index')->name('home');

Route::get('/post/{id}', 'BlogController@show')->name('show');

Route::get('/new-post', 'BlogController@formCreate'); //new-post

Route::post('/post', 'BlogController@create');

Route::get('/post/tag/{tag}', 'TagsController@index');

Route::post('/post/{post}/comment', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');