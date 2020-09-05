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

// Halaman index
Route::get('/calonsiswa', 'CalonsiswaController@index')->name('calonsiswa.index');
// Tambah data
Route::get('/calonsiswa/create', 'CalonsiswaController@create')->name('calonsiswa.create');
Route::post('/calonsiswa', 'CalonsiswaController@store')->name('calonsiswa.store');

// Route::get('/siswabaru', 'SiswabaruController@index');


// Detail
Route::get('/calonsiswa/{calonsiswa}', 'CalonsiswaController@show');
// Hapus
Route::delete('/calonsiswa/{calonsiswa}', 'CalonsiswaController@destroy');
//Edit
Route::get('/calonsiswa/{calonsiswa}/edit', 'CalonsiswaController@edit');
Route::patch('/calonsiswa/{calonsiswa}', 'CalonsiswaController@update');