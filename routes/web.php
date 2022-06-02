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



Route::get('/', 'ViewController@index')->name('index');
Route::get('/search', 'ViewController@search')->name('search');
Route::get('/detail/{id}', 'ViewController@detail')->name('detail');
Route::get('/update/{id}/edit', 'ViewController@edit')->name('edit');
Route::patch('/update/{id}', 'ViewController@update')->name('update');
Route::delete('/delete/{id}', 'ViewController@delete')->name('delete');

Route::get('/parser', 'ParserController@index');