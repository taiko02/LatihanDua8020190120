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

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('buku/index', 'BukuController@index');
    Route::get('buku/tambah', 'BukuController@tambah');
    Route::post('buku/simpan', 'BukuController@simpan');

    Route::get('buku/edit/{id}', 'BukuController@edit');
    Route::put('buku/update/{id}', 'BukuController@update');

    Route::get('buku/hapus/{id}', 'BukuController@hapus');
});
