<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/tambahaduan', 'PengaduanController@index')->name('pengaduan');
Route::post('/tambahaduan', 'PengaduanController@store')->name('pengaduan1');
Route::get('/pengaduan/{id}/edit', 'PengaduanController@edit')->name('editpengaduan');
Route::post('/pengaduan/{id}/edit', 'PengaduanController@update')->name('editpengaduan');
Route::delete('/pengaduan/{id}', 'PengaduanController@destroy')->name('hapuspengaduan');
    
Route::get('/pengaduan', 'PengaduanController@showAll')->name('listpengaduan');
Route::get('/pengaduan1', 'PengaduanController@showAll1')->name('listpengaduan1');
Route::get('/pengaduan/diteruskan', 'PengaduanController@showditeruskan')->name('pengaduanditeruskan');
Route::get('/pengaduan/diproses', 'PengaduanController@showbelumdiproses')->name('pengaduandiproses');
Route::post('/pengaduan', 'PengaduanController@store')->name('listpengaduan');
Route::get('/pengaduan/{id}', 'PengaduanController@show')->name('detailpengaduan');
//Route::post('/pengaduan/{id}', 'PengaduanController@update')->name('editpengaduan');
Route::get('/pengaduan/{id}/delete', 'PengaduanController@destroy')->name('hapuspengaduan');
Route::get('/pengaduan/{id}/detail', 'PengaduanController@showProses')->name('daftarpengaduan');
//Route::patch('/pengaduan/{id}/diterima', 'PengaduanController@terima')->name('terimapengaduan');
Route::get('/pengaduan/{id?}/diterima', 'PengaduanController@terima')->name('terimapengaduan');
Route::get('/pengaduan/{id}/ditolak', 'PengaduanController@tolak')->name('tolakpengaduan');
Route::get('/pengaduan/{id}/diteruskan', 'PengaduanController@teruskan')->name('teruskanpengaduan');
Route::post('/pengaduan/{id}/diteruskan', 'PengaduanController@updatediteruskan')->name('teruskanpengaduan');

Route::get('/profil', 'ProfilController@show')->name('editprofil');
Route::post('/profil/{id}', 'ProfilController@update')->name('updateprofil');
Route::get('/ubahpassword', 'ProfilController@showpassword')->name('editpassword');
Route::post('/ubahpassword/{id}', 'ProfilController@updatepassword')->name('updatepassword');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/masyarakat', 'DynamicDependentController@index');
Route::get('/laporan/{id}','PengaduanController@laporanpdf')->name('cetaklaporan');

Route::get('query', 'CariController@search');
Route::get('/rekapitulasi', 'RekapitulasiController@index')->name('rekapitulasi');

//Route::get('/tambahaduan', 'PengaduanController@provinces')->name('pengaduan');
//Route::get('/tambahaduan', 'PengaduanController@regencies');
//Route::get('/tambahaduan', 'PengaduanController@districts');
//Route::get('/tambahaduan', 'PengaduanController@villages');

//Route::get('/location', 'PengaduanController@provinces');
//Route::get('/location/regencies/{param}', 'PengaduanController@regencies');
//Route::get('/location/districts/{param}', 'PengaduanController@districts');
//Route::get('/location/villages/{param}', 'PengaduanController@villages');
