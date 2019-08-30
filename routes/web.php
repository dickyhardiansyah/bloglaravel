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

//pages controller
Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/profil', 'PagesController@profil');
Route::get('/informasi', 'PagesController@informasi');
Route::get('/pendaftaran', 'PagesController@pendaftaran');
Route::get('/kontak', 'PagesController@kontak');

//read
Route::get('/pertama', 'PagesController@pertama');

//pendaftaran controller
Route::get('/form-pendaftaran', 'PendaftaranController@index');
Route::get('/form-pendaftaran/tambah', 'PendaftaranController@tambah');
Route::post('/form-pendaftaran/proses','PendaftaranController@proses');