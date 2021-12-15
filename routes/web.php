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

Route::get('tugas4', function () {
    return view('tugas4js');
});

Route::get('praktikum2', function () {
    return view('praktikum2form');
});

Route::get('ets2021',"ViewController@showETS") ;

Route::get('tugasphp',"ViewController@showTugasPHP") ;
Route::get('tugasphpresult',"ViewController@TugasPHPresult") ;

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{ID}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{ID}','TugasController@hapus');
Route::get('/tugas/cari','TugasController@cari');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

Route::get('/unggas','UnggasController@index');
Route::get('/unggas/tambah','UnggasController@tambah');
Route::post('/unggas/store','UnggasController@store');
Route::get('/unggas/edit/{id}','UnggasController@edit');
Route::post('/unggas/update','UnggasController@update');
Route::get('/unggas/hapus/{id}','UnggasController@hapus');
Route::get('/unggas/cari','UnggasController@cari');
Route::get('/unggas/detail/{id}','UnggasController@view');

Route::get('/nilaikuliah','NilaikuliahController@index');
Route::get('/nilaikuliah/tambah','NilaikuliahController@tambah');
Route::post('/nilaikuliah/store','NilaikuliahController@store');
Route::get('/nilaikuliah/edit/{id}','NilaikuliahController@edit');
Route::post('/nilaikuliah/update','NilaikuliahController@update');
Route::get('/nilaikuliah/hapus/{id}','NilaikuliahController@hapus');
