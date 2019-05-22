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
    Route::get('/invoice', 'InvoiceLogController@index')->name('invoice.index')->middleware('permission:input invoice number');
    Route::get('/upload', 'UploadController@index')->name('upload.index')->middleware('permission:view upload form');
    Route::get('/report', 'ReportController@index')->name('report.index')->middleware('permission:view report');
    Route::get('/certificate', 'CertificateController@index')->name('certificate.index')->middleware('permission:create certificate');
    Route::get('/productofpartner', 'ProductOfPartnerController@index')->name('productofpartner.index')->middleware('role:supadmin|financial|operation');

});

Auth::routes(['verify' => true]);


