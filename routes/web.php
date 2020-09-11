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

Route::get('halo', function () {
    return view ("halo, selamat datang di tutorial belajar laravel www.malasngoding");
});

Route::get('blog', function () {
    return view ('blog');
});

Route::get('dosen', 'App\Http\Controllers\DosenController@index');

Route::get('/pegawai/{belajarngoding}', 'PegawaiController@index');