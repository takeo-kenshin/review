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

Route::group(['prefix'=>'admin'],function(){
    Route::get('review/create','Admin\ReviewController@add')->middleware('auth'); 
    Route::get('review/page','Admin\ReviewController@page')->name('page');
    Route::post('review/page','Admin\ReviewController@product_page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
