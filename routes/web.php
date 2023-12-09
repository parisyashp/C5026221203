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
    return view('welcome2');
});

Route::get('indomie', function () {
    return view('linktree_indomie');
});

Route::get('landing-page', function () {
    return view('landing-page');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('logo', function () {
    return view('logo');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('style', function () {
    return view('style');
});

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('/blog2', function () {
    return view('blog');
});

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD untuk pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@lihat');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD untuk keranjang belanja
Route::get('/keranjang','App\Http\Controllers\KBController@index');
Route::get('/keranjang/batal/{id}','App\Http\Controllers\KBController@batal');
Route::get('/keranjang/beli/','App\Http\Controllers\KBController@beli');
Route::post('/keranjang/store/','App\Http\Controllers\KBController@store');

//route CRUD untuk sepatu
Route::get('/sepatu','App\Http\Controllers\SepatuController@index');
Route::get('/sepatu/tambah','App\Http\Controllers\SepatuController@tambah');
Route::post('/sepatu/store','App\Http\Controllers\SepatuController@store');
Route::get('/sepatu/edit/{id}','App\Http\Controllers\SepatuController@edit');
Route::post('/sepatu/update','App\Http\Controllers\SepatuController@update');
Route::get('/sepatu/hapus/{id}','App\Http\Controllers\SepatuController@hapus');
Route::get('/sepatu/view/{id}','App\Http\Controllers\SepatuController@lihat');
