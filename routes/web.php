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

Route::get('/','Admin\ReviewController@product_index')->name('index');

Route::group(['prefix'=>'admin'],function(){
    
    Route::get('review/page','Admin\ReviewController@page')->name('page');
    Route::post('review/page','Admin\ReviewController@product_page');
    
    Route::get('review/page/{id}/edit','Admin\ReviewController@product_edit')->name('page.edit');
    Route::post('review/page/{id}/edit','Admin\ReviewController@product_update')->name('page.update');
    Route::get('review/page/{id}/delete','Admin\ReviewController@product_delete')->name('product.delete')->middleware('auth');
    
    
    Route::get('review/product_page/{id}','Admin\ReviewController@comment_index')->name('product.show');
    
    Route::get('review/product_page/{id}/create','Admin\ReviewController@comment')->name('comment.show')->middleware('auth');
    Route::post('review/product_page/{id}/create','Admin\ReviewController@comment_create')->name('comment.create');
    
    Route::get('review/product_page/{id}/delete/{post}','Admin\ReviewController@comment_delete')->name('comment.delete')->middleware('auth');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
