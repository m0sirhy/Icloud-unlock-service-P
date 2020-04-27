<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dshboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Dshboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@index')->name('welcome');
    Route::resource('imei', 'ImeiController');
    Route::resource('server', 'ServerController');
    Route::resource('categories', 'CategoryController');
    Route::resource('items', 'ItemController');

    

});
