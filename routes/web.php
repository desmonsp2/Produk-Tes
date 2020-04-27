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
    return view('dashboard');
})->name('dashboard');

Route::get('produk', 'Controller_Produk@index');

Route::resource('produk.simpan', 'Controller_Produk@simpan');
Route::resource('produk.detail', 'Controller_Produk@detail');
Route::resource('produk.update', 'Controller_Produk@update');
Route::resource('produk.destroy', 'Controller_Produk@destroy');



