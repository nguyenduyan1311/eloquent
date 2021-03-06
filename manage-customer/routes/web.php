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

Route::get('/', function () {
    return view('home');
});

//tao group route customers
Route::group(['prefix' => 'customers'], function () {
    Route::get('/',[\App\Http\Controllers\CustomerController::class,'index'])->name('customers.index');
    Route::get('/create',[\App\Http\Controllers\CustomerController::class,'create'])->name('customers.create');
    Route::post('/create',[\App\Http\Controllers\CustomerController::class,'store'])->name('customers.store');
    Route::get('/{id}/edit',[\App\Http\Controllers\CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/{id}/edit',[\App\Http\Controllers\CustomerController::class,'update'])->name('customers.update');
    Route::get('/{id}/destroy',[\App\Http\Controllers\CustomerController::class,'destroy'])->name('customers.destroy');
});
Route::group(['prefix' => 'cities'], function () {
    Route::get('/','CityController@index')->name('cities.index');
    Route::get('/create','CityController@create')->name('cities.create');
    Route::get('/{id}/edit','CityController@edit')->name('cities.edit');
    Route::get('/{id}/delete','CityController@destroy')->name('cities.destroy');
});
