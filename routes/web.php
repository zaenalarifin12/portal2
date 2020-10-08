<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::group(["middleware" => ["auth"]], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/petani',           'UserController');
    Route::resource('/data-petani',      'DataPetaniController');
    Route::resource('/products',         'ProductController');
    Route::resource('/carts',            'CartController');

    Route::get('/pembelian',         'PembelianController@index');

    Route::resource('daftar-penjualan',                             'DaftarPenjualanController');
    Route::resource('daftar-penjualan.hasil-penjualan',             'HasilPenjualanController');
    Route::get('/hasil-penjualan',                                  'HasilPenjualanController@index');

    Route::put('/hasil-penjualan/status/{id}',                             'HasilPenjualanController@changeStatus');
    
    Route::resource('/orders',                              'OrderController');
    Route::resource('/transaksi',                           'TransaksiController');
    Route::put('/transaksi/{transaksi}/pengiriman',         'TransaksiController@ubah_status_pengiriman');
    
    Route::resource('/pengumuman',      'PengumumanController');
    
    Route::get('/pengaturan',           'PengaturanController@show');
    Route::get('/pengaturan/edit',      'PengaturanController@edit');
    Route::put('/pengaturan',           'PengaturanController@update');
});
//super admin => fitur extra tambah admin

    

