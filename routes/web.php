<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('/posts','ClientController@getAllPosts');

Route::get('/posts/{id}','ClientController@getPostById');

Route::get('/add-posts','ClientController@addPost');

Route::get('/update-posts','ClientController@updatePost');

Route::get('/delete-post/{id}','ClientController@deletePost');

Route::get('/test','TestController@index');

Route::get('/staff','StaffController@getAllStaff');

Route::get('/add-post','PostController@addPost');

Route::post('/add-post','PostController@createPost')->name('post.add');

Route::get('/add-user', 'UserController@addUserPhone');

Route::get('/get-phone', 'UserController@fetchPhoneByUser');