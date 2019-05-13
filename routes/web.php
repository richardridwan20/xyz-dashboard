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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/customer', 'CustomerController@index')->name('customer.index');
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::get('/detail/{id}', 'DashboardController@detail')->name('dashboard.detail');
    Route::get('/invoice', 'InvoiceLogController@index')->name('invoice.index')->middleware('role:treasury|supadmin|admin');
    Route::get('/upload', 'UploadController@index')->name('upload.index')->middleware('role:partner|supadmin');
    Route::get('/report', 'ReportController@index')->name('report.index')->middleware('role:treasury|supadmin');
    Route::get('/certificate', 'CertificateController@index')->name('certificate.index')->middleware('role:admin|supadmin');

});

Auth::routes(['verify' => true]);


