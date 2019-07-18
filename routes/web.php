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

Route::get('/dashboard','DashboardController@index');
Route::get('/kalkulatorzakat','ZakatController@kalkulatorzakat');
Route::get('/kalkulatorzakat/emas','ZakatController@kalkulatorzakatemas');
Route::get('/tentangzakat','DashboardController@tentangzakat');
Route::get('/kontak','DashboardController@kontak');