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

Route::get('/','Admin\ReviewController@product_index');

Route::group(['prefix'=>'admin'],function(){
    Route::get('review/page','Admin\ReviewController@page')->name('page');
    Route::post('review/page','Admin\ReviewController@product_page');
    Route::get('review/product_page/{id}','Admin\ReviewController@product_main_page')->name('product.show');
    Route::get('review/product_page/{id}','Admin\ReviewController@comment_index')->name('product.show');
    Route::get('review/product_page/{id}/create','Admin\ReviewController@comment')->name('comment.show')->middleware('auth');
    Route::post('review/product_page/{id}/create','Admin\ReviewController@comment_create')->name('comment.create');
    Route::get('review/product_page/{id}/delete','Admin\ReviewController@comment_delete')->name('comment.delete')->middleware('auth');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
