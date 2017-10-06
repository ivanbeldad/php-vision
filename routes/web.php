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

Route::get('/vision', 'VisionController@index')->name('vision');
Route::post('/analyze', 'VisionController@analyze')->name('analyze');
Route::get('/result', 'VisionController@result')->name('result');
