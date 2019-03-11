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

Route::get('/'            , 'NoticiaController@list');

Route::get('/new'         , 'NoticiaController@new');

Route::get('/delete/{id}' , 'NoticiaController@delete');

Route::get('/edit/{id}'   , 'NoticiaController@edit');

Route::post('/save'       , 'NoticiaController@save');