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

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@delete');
// Guru
Route::get('/guru', 'GuruController@index');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');
Route::get('/guru/trash', 'GuruController@trash');

// Relasi tabel
Route::get('/pengguna', 'PenggunaController@index');
