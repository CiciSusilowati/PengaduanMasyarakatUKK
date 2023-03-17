<?php

use App\Http\Controllers\PengaduanController;
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

Route::get('/login', function () {
    return view('pengguna.login');
});

Route::post('postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/register', 'RegisterController@index');

Route::get('/dashboard', 'DashboardController@index');

// pengaduan
Route::get('/pengaduan', 'PengaduanController@index');
Route::get('/pengaduan/tambah', 'PengaduanController@tambah' );
Route::post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/show/{id}', 'PengaduanController@show');
Route::get('/pengaduan/update/{id}', 'PengaduanController@update');
Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
Route::get('/pengaduan/hapus/{id}', 'PengaduanController@delete');

// tanggapan
Route::get('/tanggapan', 'TanggapanController@index');
Route::get('/tanggapan/tambah', 'TanggapanController@tambah');
Route::post('/tanggapan/store', 'TanggapanController@store');
Route::get('/tanggapan/show/{id}', 'TanggapanController@show');
Route::get('/tanggapan/update/{id}', 'TanggapanController@update');
Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
Route::get('/tanggapan/hapus/{id}', 'TanggapanController@delete');



