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

Route::get('/top','UserController@index');
Route::get('/detail','UserController@detail');

Route::get('/reset/email/pass','ResetEmailPassController@index')->middleware('auth');
Route::post('/reset/email/pass','ResetEmailPassController@post')->middleware('auth');

Route::get('/','CaretakerController@index')->middleware('auth');
Route::post('/','CaretakerController@re_index')->middleware('auth');
Route::post('/delete','CaretakerController@delete')->middleware('auth');
Route::post('/change','CaretakerController@change')->middleware('auth');
Route::post('/create','CaretakerController@create')->middleware('auth');
Route::get('/log/create','LogController@create')->middleware('auth');
Route::get('/log/create/conf','LogController@createConf')->middleware('auth');
Route::post('/log/create/conf','LogController@createConf')->middleware('auth');
Route::get('/log/change_delete/select','LogController@change_delete_select');
Route::get('/log/change','LogController@change')->middleware('auth');
Route::post('/log/change','LogController@change')->middleware('auth');
Route::get('/log/change/conf','LogController@changeConf')->middleware('auth');
Route::post('/log/change/conf','LogController@changeConf')->middleware('auth');
Route::get('/log/delete/conf','LogController@deleteConf')->middleware('auth');
Route::post('/log/delete/conf','LogController@deleteConf')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
