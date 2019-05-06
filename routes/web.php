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

Route::get('/test', function () {
    return view('layouts.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::get('/customer', 'CustomerController@index')->name('customer.index');
    Route::get('/invoice', 'InvoiceLogController@index')->name('invoice.index')->middleware('role:treasury');
    Route::get('/upload', 'UploadController@index')->name('upload.index')->middleware('role:partner');
});

Auth::routes(['verify' => true]);


