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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'PostController@index')->name('top');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::post('post', 'PostController@create')->name('post.create');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
