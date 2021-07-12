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

Route::get('/','AppController@welcome');
Route::get('/about','AppController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('booking','BookingController')->middleware('auth');

Route::get('admin-dashboard',function ()
{
    return view('admin.dashboard');
})->middleware('auth','admin');
