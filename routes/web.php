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


//-- Back
Route::prefix('admin')->group(function () {
        
        Route::get('/', 'App\Http\Controllers\back\StarController@index')->name('admin.stars');
        Route::get('/create', 'App\Http\Controllers\back\StarController@create')->name('admin.stars.create');
        Route::post('/store', 'App\Http\Controllers\back\StarController@store')->name('admin.stars.store');
        Route::get('/edit/{star}', 'App\Http\Controllers\back\StarController@edit')->name('admin.stars.edit');
        Route::post('/update/{star}', 'App\Http\Controllers\back\StarController@update')->name('admin.stars.update');
        Route::get('/destroy/{star}', 'App\Http\Controllers\back\StarController@destroy')->name('admin.stars.destroy');             
        });
//---- Fin de BACK        
//////////////////////////////////////////////////////////////////////////////////
//--Front
Route::post('/','App\Http\Controllers\front\StarController@index')->name('stars');
Route::get('/','App\Http\Controllers\front\StarController@index')->name('starsA');
//--Fin de FRONT
//////////////////////////////////////////////////////////////////////////////////

