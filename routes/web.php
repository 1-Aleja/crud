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


Route::get('/login', 'App\Http\Controllers\LoginController@viewLogin')->name('login')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@loginUser')->name('loginUser');
Route::post('/logout', 'App\Http\Controllers\LoginController@logoutUser')->name('logoutUser')->middleware('auth');
Route::get('/register', 'App\Http\Controllers\RegisterUserController@viewRegisterUser')->name('viewRegisterUser');
Route::post('/register', 'App\Http\Controllers\RegisterUserController@registerUser')->name('registerUser');
Route::get('/data-grid', 'App\Http\Controllers\DocumentsController@index')->name('indexDocument')->middleware('auth');
Route::get('/documents/{id}/edit', 'App\Http\Controllers\DocumentsController@edit')->name('editDocument')->middleware('auth');
Route::post('/documents/{id}/edit', 'App\Http\Controllers\DocumentsController@update')->name('updateDocument')->middleware('auth');
Route::get('/documents/{id}/destroy', 'App\Http\Controllers\DocumentsController@destroy')->name('destroyDocument')->middleware('auth');
Route::get('/documents/create', 'App\Http\Controllers\DocumentsController@create')->name('createDocument')->middleware('auth');
Route::post('/documents/create', 'App\Http\Controllers\DocumentsController@save')->name('saveDocument')->middleware('auth');



