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

// GET requests
Route::get('/login', 'Auth\LoginController@create');
Route::get('/register', 'Auth\RegisterController@create');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');

// POST requests
Route::post('/login', 'Auth\LoginController@store');
Route::post('/logout', 'Auth\LoginController@logout');
Route::post('/register', 'Auth\RegisterController@store');

Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');
