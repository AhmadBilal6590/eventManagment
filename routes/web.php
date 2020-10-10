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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::resource('customer', 'CustomerController');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
 Route::get('/customer', 'CustomerController@index')->name('customer');
 Route::get('/customer/delete/{id}', 'CustomerController@destroy')->name('delete');
 Route::get('/customer/purchased', 'CustomerController@purchaseList')->name('purchased');
 Route::get('/customer/eventsList', 'CustomerController@eventsList')->name('eventsList');
 Route::get('/customer/store/{user_id}/{event_id}', 'CustomerController@store')->name('store');
Route::resource('event', 'EventController');
Route::resource('vendor', 'VendorController2');
Route::get('/home', 'HomeController@index')->name('home');


