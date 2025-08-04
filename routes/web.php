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




/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/

Route::get('/dashboard', function () {
    return view('dashboard.crm.index');
});


Route::get('/analytics', function () {
    return view('dashboard.Analytics.index');
});
/*-------------------------------------------------------
                    Proposal routes
-------------------------------------------------------*/
Route::get('/proposal', function () {

    return view('proposal.proposal.index');
});


Route::get('/proposal/proposalView', function () {

    return view('proposal.proposalView.index');
});


Route::get('/proposal/proposalEdit', function () {


    return view('proposal.proposalEdit.index');
});


Route::get('/proposal/proposalCreate', function () {


    return view('proposal.proposalCreate.index');
});

/*-------------------------------------------------------
                    reports routes
-------------------------------------------------------*/

Route::get('/Reports/reportsSales', function () {


    return view('reports.sales.index');
});
Route::get('/Reports/reportsLeads', function () {


    return view('reports.leads.index');
});
Route::get('/Reports/reportsProject', function () {


    return view('reports.project.index');
});
Route::get('/Reports/reportsTimesheets', function () {


    return view('reports.timesheets.index');
});

/*-------------------------------------------------------
                    aplications routes
-------------------------------------------------------*/

Route::get('/Applications/appsChat', function () {


    return view('applications.chat.index');
});
Route::get('/Applications/appsEmail', function () {


    return view('applications.email.index');
});
Route::get('/Applications/appsTasks', function () {


    return view('applications.tasks.index');
});
Route::get('/Applications/appsNotes', function () {


    return view('applications.notes.index');
});
Route::get('/Applications/appsStorage', function () {


    return view('applications.storage.index');
});
Route::get('/Applications/appsCalendar', function () {


    return view('applications.calendar.index');
});

/*-------------------------------------------------------
                    customers routes
-------------------------------------------------------*/

Route::get('/customers', function () {

    return view('customers.customers.index');
});
Route::get('/customers/customersView', function () {

    return view('customers.customersView.index');
});
Route::get('/customers/customersCreate', function () {

    return view('customers.customersCreate.index');
});

/*-------------------------------------------------------
                    payment routes
-------------------------------------------------------*/

Route::get('/payment', function () {

    return view('payment.payment.index');
});
Route::get('/payment/invoiceView', function () {

    return view('payment.invoiceView.index');
});
Route::get('/payment/invoiceCreate', function () {

    return view('payment.invoiceCreate.index');
});


/*-------------------------------------------------------
                    widgets routes
-------------------------------------------------------*/

Route::get('/widgets/lists', function () {
    return view('widgets.lists.index');
});

Route::get('/widgets/tables', function () {
    return view('widgets.tables.index');
});

Route::get('/widgets/charts', function () {
    return view('widgets.charts.index');
});

Route::get('/widgets/miscellaneous', function () {
    return view('widgets.miscellaneous.index');
});

Route::get('/widgets/statistics', function () {
    return view('widgets.statistics.index');
});

Route::get('/', function () {
    return view('home.main');
});
