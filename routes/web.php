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

Route::group(['middleware' => 'admin', 'auth'], function(){

	Route::get('/level/index', 'LevelController@index')->name('andre_level.index');

	Route::get('/level/halcreate', 'LevelController@create')->name('andre_level.halcreate');

	Route::get('/level/print', 'LevelController@print')->name('andre_level.print');

	Route::post('/level/create', 'LevelController@store')->name('andre_level.create');

	Route::get('/level/edit/{andre_id_level}', 'LevelController@edit')->name('andre_level.haledit');

	Route::post('/level/edit', 'LevelController@update')->name('andre_level.edit');

	Route::get('/level/delete/{andre_id_level}', 'LevelController@destroy')->name('andre_level.delete');


	//Jenis

	Route::get('/jenis/index', 'JenisController@index')->middleware('auth', 'admin')->name('andre_jenis.index');

	Route::get('/jenis/halcreate', 'JenisController@create')->name('andre_jenis.halcreate');

	Route::get('/jenis/print', 'JenisController@print')->name('andre_jenis.print');

	Route::post('/jenis/create', 'JenisController@store')->name('andre_jenis.create');

	Route::get('/jenis/edit/{andre_id_jenis}', 'JenisController@edit')->name('andre_jenis.haledit');

	Route::post('/jenis/edit', 'JenisController@update')->name('andre_jenis.edit');

	Route::get('/jenis/delete/{andre_id_jenis}', 'JenisController@destroy')->name('andre_jenis.delete');


	//Ruang

	Route::get('/ruang/index', 'RuangController@index')->name('andre_ruang.index');

	Route::get('/ruang/halcreate', 'RuangController@create')->name('andre_ruang.halcreate');

	Route::get('/ruang/print', 'RuangController@print')->name('andre_ruang.print');

	Route::post('/ruang/create', 'RuangController@store')->name('andre_ruang.create');

	Route::get('/ruang/edit/{andre_id_ruang}', 'RuangController@edit')->name('andre_ruang.haledit');

	Route::post('/ruang/edit', 'RuangController@update')->name('andre_ruang.edit');

	Route::get('/ruang/delete/{andre_id_ruang}', 'RuangController@destroy')->name('andre_ruang.delete');

	//Petugas

	Route::get('/petugas/index', 'PetugasController@index')->name('andre_petugas.index');

	Route::get('/petugas/halcreate', 'PetugasController@create')->name('andre_petugas.halcreate');

	Route::get('/petugas/print', 'PetugasController@print')->name('andre_petugas.print');

	Route::post('/petugas/create', 'PetugasController@store')->name('andre_petugas.create');

	Route::get('/petugas/edit/{andre_id_petugas}', 'PetugasController@edit')->name('andre_petugas.haledit');

	Route::post('/petugas/edit', 'PetugasController@update')->name('andre_petugas.edit');

	Route::get('/petugas/delete/{andre_id_petugas}', 'PetugasController@destroy')->name('andre_petugas.delete');

	//Pegawai

	Route::get('/pegawai/index', 'PegawaiController@index')->name('andre_pegawai.index');

	Route::get('/pegawai/halcreate', 'PegawaiController@create')->name('andre_pegawai.halcreate');

	Route::get('/pegawai/print', 'PegawaiController@print')->name('andre_pegawai.print');

	Route::post('/pegawai/create', 'PegawaiController@store')->name('andre_pegawai.create');

	Route::get('/pegawai/edit/{andre_id_pegawai}', 'PegawaiController@edit')->name('andre_pegawai.haledit');

	Route::post('/pegawai/edit', 'PegawaiController@update')->name('andre_pegawai.edit');

	Route::get('/pegawai/delete/{andre_id_pegawai}', 'PegawaiController@destroy')->name('andre_pegawai.delete');

	//Akun

	Route::get('/akun/index', 'AkunController@index')->name('andre_akun.index');

	Route::get('/akun/halcreate', 'AkunController@create')->name('andre_akun.halcreate');

	Route::get('/akun/print', 'AkunController@print')->name('andre_akun.print');

	Route::get('/akun/print-pegawai', 'AkunController@printPegawai')->name('andre_akun.print-pegawai');

	Route::get('/akun/print-petugas', 'AkunController@printPetugas')->name('andre_akun.print-petugas');

	Route::post('/akun/create', 'AkunController@store')->name('andre_akun.create');

	Route::get('/akun/edit/{andre_id_akun}', 'AkunController@edit')->name('andre_akun.haledit');

	Route::post('/akun/edit', 'AkunController@update')->name('andre_akun.edit');

	Route::get('/akun/delete/{andre_id_akun}', 'AkunController@delete')->name('andre_akun.delete');


	//Inventaris

	Route::get('/inventaris/index', 'InventarisController@index')->name('andre_inventaris.index');

	Route::get('/inventaris/halcreate', 'InventarisController@create')->name('andre_inventaris.halcreate');

	Route::get('/inventaris/print', 'InventarisController@print')->name('andre_inventaris.print');

	Route::post('/inventaris/create', 'InventarisController@store')->name('andre_inventaris.create');

	Route::get('/inventaris/edit/{andre_id_inventaris}', 'InventarisController@edit')->name('andre_inventaris.haledit');

	Route::post('/inventaris/edit{id}', 'InventarisController@update')->name('andre_inventaris.edit');

	Route::get('/inventaris/delete/{andre_id_inventaris}', 'InventarisController@destroy')->name('andre_inventaris.delete');


	//Peminjaman

	Route::get('/pinjam/index', 'PinjamController@index')->name('andre_pinjam.index');

	Route::get('/pinjam/halcreate', 'PinjamController@create')->name('andre_pinjam.halcreate');

	Route::get('/pinjam/print', 'PinjamController@print')->name('andre_pinjam.print');

	Route::get('/pinjam/print-detil/{andre_id_pinjam}', 'PinjamController@printDetil')->name('andre_pinjam.print-detil');

	Route::post('/pinjam/create', 'PinjamController@store')->name('andre_pinjam.create');

	Route::get('/pinjam/edit/{andre_id_pinjam}', 'PinjamController@edit')->name('andre_pinjam.haledit');

	Route::post('/pinjam/edit', 'PinjamController@update')->name('andre_pinjam.edit');

	Route::get('/pinjam/delete/{andre_id_pinjam}', 'PinjamController@destroy')->name('andre_pinjam.delete');

	Route::get('/pinjam/detil/{andre_id_pinjam}', 'PinjamController@show')->name('andre_pinjam.detil');

	Route::get('/pinjam/back/{andre_id_pinjam}', 'PinjamController@back')->name('andre_pinjam.back');

});

// Route::group(['middleware' => 'petugas', 'auth'], function(){
// 	Route::get('/pinjam/index', 'PinjamController@index')->name('andre_pinjam.index');

// 	Route::get('/pinjam/halcreate', 'PinjamController@create')->name('andre_pinjam.halcreate');

// 	Route::get('/pinjam/print', 'PinjamController@print')->name('andre_pinjam.print');

// 	Route::post('/pinjam/create', 'PinjamController@store')->name('andre_pinjam.create');

// 	Route::get('/pinjam/edit/{andre_id_pinjam}', 'PinjamController@edit')->name('andre_pinjam.haledit');

// 	Route::post('/pinjam/edit', 'PinjamController@update')->name('andre_pinjam.edit');

// 	Route::get('/pinjam/delete/{andre_id_pinjam}', 'PinjamController@destroy')->name('andre_pinjam.delete');

// 	Route::get('/pinjam/detil/{andre_id_pinjam}', 'PinjamController@show')->name('andre_pinjam.detil');

// 	Route::get('/pinjam/back/{andre_id_pinjam}', 'PinjamController@back')->name('andre_pinjam.back');
// });

// Route::group(['middleware' => 'pegawai', 'auth'], function(){
// 	Route::get('/pinjam/index', 'PinjamController@index')->name('andre_pinjam.index');

// 	Route::get('/pinjam/halcreate', 'PinjamController@create')->name('andre_pinjam.halcreate');

// 	Route::get('/pinjam/print', 'PinjamController@print')->name('andre_pinjam.print');

// 	Route::post('/pinjam/create', 'PinjamController@store')->name('andre_pinjam.create');

// 	Route::get('/pinjam/edit/{andre_id_pinjam}', 'PinjamController@edit')->name('andre_pinjam.haledit');

// 	Route::post('/pinjam/edit', 'PinjamController@update')->name('andre_pinjam.edit');

// 	Route::get('/pinjam/delete/{andre_id_pinjam}', 'PinjamController@destroy')->name('andre_pinjam.delete');

// 	Route::get('/pinjam/detil/{andre_id_pinjam}', 'PinjamController@show')->name('andre_pinjam.detil');

// });

	Route::get('/pinjam/index', 'PinjamController@index')->name('andre_pinjam.index');

	Route::get('/pinjam/halcreate', 'PinjamController@create')->name('andre_pinjam.halcreate');

	Route::get('/pinjam/print', 'PinjamController@print')->name('andre_pinjam.print');

	Route::post('/pinjam/create', 'PinjamController@store')->name('andre_pinjam.create');

	Route::get('/pinjam/edit/{andre_id_pinjam}', 'PinjamController@edit')->name('andre_pinjam.haledit');

	Route::post('/pinjam/edit', 'PinjamController@update')->name('andre_pinjam.edit');

	Route::get('/pinjam/delete/{andre_id_pinjam}', 'PinjamController@destroy')->name('andre_pinjam.delete');

	Route::get('/pinjam/detil/{andre_id_pinjam}', 'PinjamController@show')->name('andre_pinjam.detil');

	//Persetujuan

	Route::get('/persetujuan/back/{andre_id_pinjam}', 'PersetujuanController@back')->name('andre_persetujuan.back');

	Route::get('/persetujuan/index', 'PersetujuanController@index')->name('andre_persetujuan.index');

	Route::get('/persetujuan/halcreate', 'PersetujuanController@create')->name('andre_persetujuan.halcreate');

	Route::get('/persetujuan/print', 'PersetujuanController@print')->name('andre_persetujuan.print');

	Route::post('/persetujuan/create', 'PersetujuanController@store')->name('andre_persetujuan.create');

	Route::get('/persetujuan/edit/{andre_id_pinjam}', 'PersetujuanController@edit')->name('andre_persetujuan.haledit');

	Route::post('/persetujuan/edit', 'PersetujuanController@update')->name('andre_persetujuan.edit');

	Route::get('/persetujuan/delete/{andre_id_pinjam}', 'PersetujuanController@destroy')->name('andre_persetujuan.delete');

	Route::get('/persetujuan/detil/{andre_id_pinjam}', 'PersetujuanController@show')->name('andre_persetujuan.detil');

	Route::get('/persetujuan/back/{andre_id_pinjam}', 'PersetujuanController@back')->name('andre_persetujuan.back');

	Route::get('/persetujuan/approve/{andre_id_pinjam}', 'PersetujuanController@approve')->name('andre_persetujuan.approve');

	Route::get('/persetujuan/cancel/{andre_id_pinjam}', 'PersetujuanController@cancel')->name('andre_persetujuan.cancel');