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
//artikel
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::post('/artikel', 'ArtikelController@tambah')->name('tambah_artikel');
Route::post('/artikel/edit/', 'ArtikelController@edit')->name('edit-artikel');
Route::post('/artikel/delete/', 'ArtikelController@delete')->name('delete-id');


Route::get('/komentar', 'komentarController@index')->name('komentar');
