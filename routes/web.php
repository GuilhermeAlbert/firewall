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
    return view('layouts.login');
})->middleware(['checkAppSettings']);

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['checkAppSettings']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware(['checkAppSettings']);
