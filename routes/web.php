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

// main route
Route::get('/'              , 'NoticiaController@list');

// news routes

Route::get('/noticias'              , 'NoticiaController@list');
Route::get('/noticias/new'          , 'NoticiaController@new');
Route::post('/noticias/save'        , 'NoticiaController@save');
Route::get('/noticias/edit/{iId}'   , 'NoticiaController@edit');
Route::post('/noticias/update'      , 'NoticiaController@update');
Route::get('/noticias/delete/{iId}' , 'NoticiaController@delete');

// category router

Route::get('/categorias'              , 'CategoriaController@list');
Route::get('/categorias/new'          , 'CategoriaController@new');
Route::post('/categorias/save'        , 'CategoriaController@save');
Route::get('/categorias/edit/{iId}'   , 'CategoriaController@edit');
Route::post('/categorias/update'      , 'CategoriaController@update');
Route::get('/categorias/delete/{iId}' , 'CategoriaController@delete');
