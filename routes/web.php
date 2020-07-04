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


Route::get('/pertanyaan/create', 'PertanyaanController@tambah');
Route::post('/pertanyaan', 'PertanyaanController@insert');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/{id}', 'PertanyaanController@detail');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
// Route::get('/pertanyaan/{id}/delete', 'PertanyaanController@hapus');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@hapus');

Route::post('/jawaban', 'JawabanController@store');
Route::get('/jawaban/{id}', 'JawabanController@index');
