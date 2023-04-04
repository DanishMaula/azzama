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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home/', 'HomeController@index');

// Auth::routes();

Route::resource('/home', 'HomeController');
Auth::routes();

Route::resource('/hijab', 'HijabController');
Route::resource('/dress', 'DressController');

Route::get('/article', 'ArticleController@article')->name('article');

Route::resource('/produk', 'AdminController');

// Route::get('/produk', 'AdminController');

Route::get('/article/detail/{id}', 'DetailArticleController@detail')->name('article.detail');