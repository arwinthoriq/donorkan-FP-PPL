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

Route::get('/Darah','DarahController@darah')->name('darah'); //setelah welcome / diluar home

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'Home','middleware'=>['auth']], function() {

    Route::get('/', 'TransaksiController@dashboard')->name('home');
    Route::get('/Setting','UserSettingController@form')->name('name.donorkan.user.setting');
    Route::post('/Setting','UserSettingController@update');

    Route::group(['prefix'=>'Admin','middleware'=>'akses.admin'], function() {
        Route::get('/Daftar/User','UserController@daftar')->name('name.donorkan.user.daftar');
        Route::get('/Daftar/User/Hapus/{id}','UserController@hapus');
    });

    Route::group(['prefix'=>'Customer','middleware'=>'akses.customer'], function() {
        Route::get('/Darah','DarahController@daftar')->name('name.donorkan.darah.daftar'); 
        Route::get('/Minta','DarahController@form')->name('name.donorkan.darah.tambah');
        Route::post('/Minta','DarahController@tambah');

            Route::group(['prefix'=>'Transaksi'],function() {
                Route::get('/Donor/{id}', 'DarahController@idpesan');//ketika id nya diganti dengan id yang tidak ada dalam tabel langsung di url, maka masih eror
                Route::get('/Daftar','TransaksiController@daftar')->name('name.donorkan.transaksi.daftar');
                Route::get('/Donor','TransaksiController@form')->name('name.donorkan.transaksi.tambah');
                Route::post('/Donor','TransaksiController@tambah');
            });
    });

});

