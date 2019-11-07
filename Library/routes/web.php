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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/data', 'GetBooksController@getData')->name('data');
Route::get('/submit/{title}{author}{genre}' , 'AddController@writeData')->name('write');
Route::get('/checkout/{id}' , 'CheckoutController@updateStatus')->name('update');
Route::get('/admin' , 'AdminController@admin');
Route::get('/admin/{id}' , 'AdminController@returnBook');