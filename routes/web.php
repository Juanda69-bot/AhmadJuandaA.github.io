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
//isi route mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('Tambah', 'MahasiswaController@tambahdata') -> name('tambah.mahasiswa');
Route::POST('simpan-mahasiswa', 'MahasiswaController@save')->name('simpan.mahasiswa');
Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');
Route::POST('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@delete')->name('hapus.mahasiswa');


//isi route makul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('tambah-makul', 'MakulController@tambah');
Route::post('makul','MakulController@create');
Route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'MakulController@update')->name('makul.update');
Route::get('hapus-makul/{id}', 'MakulController@destroy')->name('makul.hapus');


//isi route nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('tambah-nilai', 'NilaiController@tambah');
Route::post('nilai', 'NilaiController@create');
Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('update-nilai/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('nilai.hapus');
