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
// DASHBOARD
Route::get('/dashboard/index', function () {
    return view('dashboard/index');
});

Route::get('/dashboard/index3', function () {
    return view('dashboard/index3');
});

Route::get('/dashboard_design/create_invoice', function () {
    return view('dashboard_design/create_invoice');
});

Route::get('/dashboard_design/no_transaction_yet', function () {
    return view('dashboard_design/no_transaction_yet');
});

Route::get('/dashboard_design/record_expense', function () {
    return view('dashboard_design/record_expense');
});

// INDEX
Route::get('/index/index_landing_backup', function () {
    return view('index/index_landing_backup');
});

Route::get('/index/index2', function () {
    return view('index/index2');
});

Route::get('/index/index', function () {
    return view('index/index');
});

Route::get('/index/index_with_password', function () {
    return view('/index/index_with_password');
});


// REGISTRATION
Route::get('/registration/ubload', function () {
    return view('registration/ubload');
});

Route::get('/registration/ubcontact', function () {
    return view('registration/ubcontact');
});


// LAYOUTS
Route::get('/layouts/paynow', function () {
    return view('layouts/paynow');
});

Route::get('/layouts/footer', function () {
    return view('layouts/footer');
});


// TIME
Route::get('/time/index', function () {
    return view('time/index');
});


// LANDING
Route::get('/landing/index', function () {
    return view('landing/index');
});


// EXPIRED
Route::get('/expired/index', function () {
    return view('expired/index');
});


// SUPPORT
Route::get('/support/list2', function () {
    return view('support/list2');
});

Route::get('/support/reg_message', function () {
    return view('support/reg_message');
});

Route::get('/support/submit_info', function () {
    return view('support/submit_info');
});

Route::get('/support/supports', function () {
    return view('support/supports');
});


// ACCOUNTING
Route::get('/accounting/bank', function () {
    return view('/accounting/bank');
});


// USER
Route::get('/user/contact_us', function () {
    return view('/user/contact_us');
});

Route::get('/user/login', function () {
    return view('/user/login');
});

Route::get('/user/reset', function () {
    return view('/user/reset');
});

Route::get('/user/link_fb', function () {
    return view('/user/link_fb');
});

Route::get('/user/smartphone', function () {
    return view('user/smartphone');
});

Route::get('/user/landing', function () {
    return view('user/landing');
});

Route::get('/user/plan', function () {
    return view('user/plan');
});

Route::get('/user/get_started', function () {
    return view('user/get_started');
});

//SETTING 
Route::get('/setting/company', function () {
    return view('setting/company');
});



//REPORT        
Route::get('/report/index', function () {
    return view('report/index');
});

//INVENTORY
Route::get('/inventory/menu', function () {
    return view('inventory/menu');
});

Route::get('/inventory/on_hand', function () {
    return view('inventory/on_hand');
});

Route::get('/inventory/branch', function () {
    return view('inventory/branch');
});

//INVOICE
Route::get('/invoice/index', function () {
    return view('invoice/index');
});

Route::get('/invoice/collection', function () {
    return view('invoice/collection');
});

Route::get('/invoice/customers', function () {
    return view('invoice/customers');
});

Route::get('/invoice/cost-import', function () {
    return view('invoice/cost-import');
});

Route::get('/invoice/salesreceipt', function () {
    return view('invoice/salesreceipt');
});

Route::get('/invoice/tasks', function () {
    return view('invoice/tasks');
});

Route::get('/invoice/newreceipt', function () {
    return view('invoice/newreceipt');
});

Route::get('/invoice/new', function () {
    return view('invoice/new');
});