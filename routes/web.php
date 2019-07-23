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
    Route::get('/register_partner_role', 'RegisterController@register')->name('dashboard.registerrole')->middleware('permission:register partner');
    Route::get('/register_partner', 'RegisterController@registerPartner')->name('dashboard.registerpartner')->middleware('role:supadmin|financial|operation');
    Route::post('/register_new_partner_role', 'RegisterController@inputPartner')->name('register.input_partner');
    Route::post('/register_new_partner', 'RegisterController@inputNewPartner')->name('register.input_new_partner');
    Route::post('/spaj_input', 'DashboardController@inputTransaction')->name('dashboard.input_transaction');
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::get('/detail/{id}', 'DashboardController@detail')->name('dashboard.detail');
    Route::get('/invoice', 'InvoiceLogController@index')->name('invoice.index')->middleware('permission:input invoice number');
    Route::get('/upload', 'UploadController@index')->name('upload.index')->middleware('permission:view upload form');
    Route::post('/upload', 'UploadController@upload')->name('upload.post');
    Route::get('/certificate/{id}', 'CertificateController@index')->name('certificate.index');
    Route::get('/productofpartner', 'ProductOfPartnerController@index')->name('productofpartner.index')->middleware('role:supadmin|financial|operation');
    Route::get('/statuschange/{id}/{status}', 'DashboardController@changeStatus')->name('dashboard.changeStatus');
    Route::get('/testing', 'DashboardController@testing')->name('dashboard.testing');
    Route::get('/check', 'DashboardController@check')->name('dashboard.check');
    Route::get('/partner', 'DashboardController@partner')->name('dashboard.partner');
    Route::get('/download-report', 'DashboardController@downloadReport')->name('dashboard.download');
    Route::get('/download-certificate', 'CertificateController@downloadCertificate')->name('certificate.download');
    Route::get('/create-invoice/{invoiceNumber}', 'DashboardController@createInvoice')->name('dashboard.invoice');
    Route::get('/spaj', 'DashboardController@spaj')->name('dashboard.spaj')->middleware('role:supadmin');
    Route::get('/payment-proof', 'PaymentProofController@index')->name('payment.index')->middleware('role:supadmin');
    Route::post('/payment-proof', 'PaymentProofController@upload')->name('payment.upload')->middleware('role:supadmin');
});

Auth::routes(['verify' => true]);


