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

Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::post('/artikel', 'ArtikelController@tambah')->name('tambah_artikel');
Route::post('/artikel/edit', 'ArtikelController@edit')->name('edit_artikel');
Route::post('/artikel/delete', 'ArtikelController@delete')->name('delete_artikel');

Route::get('/komentar', 'KomentarController@index')->name('komentar');

