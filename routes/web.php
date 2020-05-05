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


Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/mobil', 'MobilController@index')->name('mobil_index');
Route::get('/master', function () {
    return view('layouts.master');
});
Route::get('/blank', function () {
    return view('blank');
});

// Car
Route::get('/car','CarController@index')->name('car.index');
Route::get('/car/create','CarController@create')->name('car.create');
Route::get('/car/{id}/edit','CarController@edit')->name('car.edit');
Route::get('/car/{id}/show','CarController@show')->name('car.show');
Route::delete('/car/{id}/destroy','CarController@destroy')->name('car.destroy');
Route::post('/car/store','CarController@store')->name('car.store');
Route::post('/car/{id}/update','CarController@update')->name('car.update');
Route::get('/car/{id}/getImage','CarController@getImage')->name('car.getImage');
Route::get('/car/{id}/destroyImage','CarController@destroyImage')->name('car.destroyImage');
 
// Manufacture

    Route::get('/manufacture','ManufactureController@index')->name('manufacture.index');
    Route::get('/manufacture/create','ManufactureController@create')->name('manufacture.create');
    Route::get('/manufacture/source','ManufactureController@source')->name('manufacture.source');
    Route::get('/manufacture/{id}/edit','ManufactureController@edit')->name('manufacture.edit');
    Route::get('/manufacture/{id}/show','ManufactureController@show')->name('manufacture.show');
    Route::get('/manufacture/{id}/destroy','ManufactureController@destroy')->name('manufacture.destroy');
    Route::get('/manufacture/getManufacture','ManufactureController@getManufacture')->name('manufacture.getManufacture');
    Route::post('/manufacture/store','ManufactureController@store')->name('manufacture.store');
    Route::post('/manufacture/{id}/update','ManufactureController@update')->name('manufacture.update');
    Route::get('/manufacture/{id}/find','ManufactureController@find')->name('manufacture.find');

    //Customer

    Route::get('/customer', 'CustomerController@index')->name('customer.index');
    Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
    Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
    Route::delete('customer/{id}/destroy', 'CustomerController@destroy')->name('customer.destroy');
    Route::get('customer/{id}/edit', 'CustomerController@edit')->name('customer.edit');
    Route::post('customer/{id}/update', 'CustomerController@update')->name('customer.update');

Auth::routes();

Route::post('/dashboard', 'DashboardController@home')->name('dashboard.home');
