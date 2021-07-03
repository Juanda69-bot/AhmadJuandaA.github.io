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

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('Tambah', 'TambahController@tambahdata');
Route::POST('simpan-mahasiswa', 'MahasiswaController@save')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');
Route::POST('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@delete')->name('hapus.mahasiswa');

