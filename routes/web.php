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

Route::get('/test', 'TestController@testPage');
Route::get('/add_post', 'TestController@add_post');
Route::post('/create_post_in_db', 'TestController@create_post_in_db');
Route::get ('/comments', 'TestController@comments');
Route::get ('/create_comment', 'TestController@create_comments');
Route::get('/post_comment', 'TestController@post_comment');
Route::get('/sendmail', 'TestController@sendmail');
Route::get('/verstka', 'TestController@verstka');
Route::get('/', function () {
    return view('welcome');
});


Route::get('/page', function () {
    return view('welcome');
});
