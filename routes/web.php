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
    return view('backend.index');
});

Route::get('/data-tables', function () {
    return view('backend.data-tables');
});

Route::get('/master', function () {
    return view('backend.themes.master');
});

// Route::get('/info', function () {
//     return view('info');
// });