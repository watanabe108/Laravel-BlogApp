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

Route::get('/reset/email/pass','ResetEmailPassController@index');
Route::post('/reset/email/pass','ResetEmailPassController@post');

Route::get('/','CaretakerController@index');
Route::post('/','CaretakerController@re_index');
Route::post('/delete','CaretakerController@delete');
Route::post('/change','CaretakerController@change');
Route::post('/create','CaretakerController@create');
Route::get('/log/create','LogController@create');
Route::get('/log/create/conf','LogController@createConf');
Route::post('/log/create/conf','LogController@createConf');
Route::get('/log/change_delete/select','LogController@change_delete_select');
Route::get('/log/change','LogController@change');
Route::post('/log/change','LogController@change');
Route::get('/log/change/conf','LogController@changeConf');
Route::post('/log/change/conf','LogController@changeConf');
Route::get('/log/delete/conf','LogController@deleteConf');
Route::post('/log/delete/conf','LogController@deleteConf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
