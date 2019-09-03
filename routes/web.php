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

Route::post('/logout', 'Auth/LoginController@logout')->name('logout');
Route::post('/login', 'Auth/LoginController@login')->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/register-product', 'ProductController@index')->name('register.product');
    Route::get('/register-partner-role', 'RegisterController@register')->name('dashboard.registerrole')->middleware('permission:register partner');
    Route::get('/register-partner', 'RegisterController@registerPartner')->name('dashboard.registerpartner')->middleware('role:supadmin|financial|operation');
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::get('/detail/{id}', 'DashboardController@detail')->name('dashboard.detail');
    Route::get('/invoice', 'InvoiceLogController@index')->name('invoice.index')->middleware('role:supadmin|financial');
    Route::get('/upload', 'UploadController@index')->name('upload.index')->middleware('permission:view upload form');
    Route::get('/certificate/{id}', 'CertificateController@index')->name('certificate.index');
    Route::get('/productofpartner', 'ProductOfPartnerController@index')->name('productofpartner.index')->middleware('role:supadmin|financial|operation');
    Route::get('/productofpartner/delete/{id}', 'ProductOfPartnerController@destroy')->name('productofpartner.delete')->middleware('role:supadmin|financial|operation');
    Route::get('/statuschange/{id}/{status}', 'DashboardController@changeStatus')->name('dashboard.changeStatus');
    Route::get('/partner', 'DashboardController@partner')->name('dashboard.partner');
    Route::get('/download-report', 'DashboardController@downloadReport')->name('dashboard.download')->middleware('role:supadmin|financial|operation|partner financial|partner operation');
    Route::get('/download-certificate', 'CertificateController@downloadCertificate')->name('certificate.download');
    Route::get('/create-invoice/{invoiceNumber}', 'DashboardController@createInvoice')->name('dashboard.invoice');
    Route::get('/product/add', 'DashboardController@addProduct')->name('dashboard.addProduct');
    Route::get('/spaj', 'DashboardController@spaj')->name('dashboard.spaj')->middleware('role:supadmin|operation|financial|partner operation|partner financial');
    Route::get('/payment-proof', 'PaymentProofController@index')->name('payment.index')->middleware('role:supadmin|operation|financial|partner operation|partner financial');
    Route::post('/payment-proof', 'PaymentProofController@upload')->name('payment.upload')->middleware('role:supadmin|operation|financial|partner operation|partner financial');
    Route::post('/invoice-payment', 'PaymentProofController@uploadInvoicePayment')->name('payment.invoice')->middleware('role:supadmin|financial');
    Route::get('/agent/manage', 'DashboardController@manageAgent')->name('dashboard.manage_agent')->middleware('role:supadmin|financial|operation|partner financial|partner operation');
    Route::get('/agent-form', 'DashboardController@agentForm')->name('dashboard.agent_form');
    Route::get('/agent-quota', 'DashboardController@agentQuota')->name('dashboard.agent_quota');
    Route::get('/agent/delete/{id}', 'DashboardController@deleteAgent')->name('dashboard.delete_agent');
    Route::get('/voucher', 'VoucherController@index')->name('voucher.index');
    Route::get('/voucher/form', 'VoucherController@showForm')->name('voucher.form');
    Route::post('/voucher/create', 'VoucherController@create')->name('voucher.create');
    Route::get('/voucher/delete/{id}', 'VoucherController@deleteVoucher')->name('voucher.delete');
    Route::get('/limitation', 'LimitationController@index')->name('limitation.index');
    Route::get('/limitation/form', 'LimitationController@showForm')->name('limitation.form');
    Route::post('/limitation/create', 'LimitationController@create')->name('limitation.create');
    Route::get('/limitation/delete/{id}', 'LimitationController@deleteDetailLimitation')->name('detail.limitation.delete');
    Route::post('/productofpartner/changequota', 'ProductOfPartnerController@changeQuota')->name('ProductOfPartner.change_quota');
    Route::post('/agent/add', 'DashboardController@addAgent')->name('dashboard.add_agent');
    Route::post('/agent/change-quota', 'DashboardController@changeQuota')->name('dashboard.change_quota');
    Route::post('/upload', 'UploadController@upload')->name('upload.post');
    Route::post('/register-product', 'ProductController@create')->name('product.create');
    Route::post('/productofpartner/create', 'ProductOfPartnerController@create')->name('productofpartner.create');
    Route::post('/register-new-partner-role', 'RegisterController@inputPartner')->name('register.input_partner');
    Route::post('/register-new-partner', 'RegisterController@inputNewPartner')->name('register.input_new_partner');
    Route::post('/spaj-input', 'DashboardController@inputTransaction')->name('dashboard.input_transaction');
});

Auth::routes(['verify' => true]);


