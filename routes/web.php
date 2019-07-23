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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tentangzakat','DashboardController@tentangzakat');

Route::get('/pembayaran','PembayaranController@pembayaran');
Route::get('/daftarpembayaran','PembayaranController@daftarpembayaran');
Route::post('/pembayaran/store','PembayaranController@store');
Route::get('/pembayaran/edit/{id}','PembayaranController@edit');
Route::post('/pembayaran/update','PembayaranController@update');
Route::get('/pembayaran/hapus/{id}','PembayaranController@hapus');

Route::get('/kalkulatorzakat','ZakatController@kalkulatorzakat')->name('kalkulatorzakat');
Route::get('/kalkulatorzakat/mal','ZakatController@kalkulatorzakatmal')->name('kalkulatorzakatmal');
Route::get('/kalkulatorzakat/fitrah','ZakatController@kalkulatorzakatfitrah')->name('kalkulatorzakatfitrah');
Route::get('/kalkulatorzakat/penghasilan','ZakatController@kalkulatorzakatpenghasilan')->name('kalkulatorzakatpenghasilan');
Route::get('/kalkulatorzakat/pertanian','ZakatController@kalkulatorzakatpertanian')->name('kalkulatorzakatpertanian');
Route::get('/kalkulatorzakat/emas','ZakatController@kalkulatorzakatemas')->name('kalkulatorzakatemas');