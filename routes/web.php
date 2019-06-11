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

// 一覧ページ
Route::get('/', 'PostController@index')->name('top');

// 投稿ページ
Route::get('/post', function () {
    return view('post');
})->name('post');
// 投稿(POST)
Route::post('post', 'PostController@create')->name('post.create');

// 問い合わせ
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
// 問い合わせ(POST)
Route::post('contact', 'ContactController@create')->name('contact.create');

// ユーザー関係
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
