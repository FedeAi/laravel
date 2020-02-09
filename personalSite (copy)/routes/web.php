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
    return view('home')->middleware('navbar');
});

Route::get('/articles','ArticlesController@index')->name('articles.index')->middleware('navbar');
Route::post('/articles','ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create')->middleware('navbar');
Route::get('/articles/{article}','ArticlesController@show')->name('articles.show')->middleware('navbar');
Route::get('/articles/{article}/edit','ArticlesController@edit')->middleware('navbar');
Route::put('/articles/{article}','ArticlesController@update')->middleware('navbar');
