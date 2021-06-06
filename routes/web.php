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
Route::post('/store', 'HomeController@store')->name('posts.store');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/create', 'HomeController@create')->name('posts.create');


Route::get('/page/about', 'PageController@show')->name('about');

//
//Route::get('/test', 'HomeController@test');
//
//Route::get('/test2', 'Test\TestController@index');
//Route::resource('/posts','PostController');
