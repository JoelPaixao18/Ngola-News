<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/

Route::redirect('/', 'admin/dashboard');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard.crm.index');
});

Route::get('admin/analytics', function () {
    return view('admin.dashboard.Analytics.index');
});
/*-------------------------------------------------------
                    Proposal routes
-------------------------------------------------------*/
Route::get('admin/proposal', function () {

    return view('admin.proposal.proposal.index');
});


Route::get('admin/proposal/proposalView', function () {

    return view('admin.proposal.proposalView.index');
});


Route::get('admin/proposal/proposalEdit', function () {


    return view('admin.proposal.proposalEdit.index');
});


Route::get('admin/proposal/proposalCreate', function () {


    return view('admin.proposal.proposalCreate.index');
});

/*-------------------------------------------------------
                    reports routes
-------------------------------------------------------*/

/* Route::get('admin/Reports/reportsSales', function () {


    return view('admin.reports.sales.index');
});
Route::get('admin/Reports/reportsLeads', function () {


    return view('admin.reports.leads.index');
});
Route::get('admin/Reports/reportsProject', function () {


    return view('admin.reports.project.index');
});
Route::get('admin/Reports/reportsTimesheets', function () {


    return view('admin.reports.timesheets.index');
});
 */
/*-------------------------------------------------------
                    aplications routes
-------------------------------------------------------*/

Route::get('admin/Applications/appsChat', function () {


    return view('admin.applications.chat.index');
});
Route::get('admin/Applications/appsEmail', function () {


    return view('admin.applications.email.index');
});
Route::get('admin/Applications/appsTasks', function () {


    return view('admin.applications.tasks.index');
});
Route::get('admin/Applications/appsNotes', function () {


    return view('admin.applications.notes.index');
});
Route::get('admin/Applications/appsStorage', function () {


    return view('admin.applications.storage.index');
});
Route::get('admin/Applications/appsCalendar', function () {


    return view('admin.applications.calendar.index');
});

/*-------------------------------------------------------
                    customers routes
-------------------------------------------------------*/

Route::get('admin/customers', function () {

    return view('admin.customers.customers.index');
});
Route::get('admin/customers/customersView', function () {

    return view('admin.customers.customersView.index');
});
Route::get('admin/customers/customersCreate', function () {

    return view('admin.customers.customersCreate.index');
});

/*-------------------------------------------------------
                    payment routes
-------------------------------------------------------*/

Route::get('admin/payment', function () {

    return view('admin.payment.payment.index');
});
Route::get('admin/payment/invoiceView', function () {

    return view('admin.payment.invoiceView.index');
});
Route::get('admin/payment/invoiceCreate', function () {

    return view('admin.payment.invoiceCreate.index');
});


/*-------------------------------------------------------
                    widgets routes
-------------------------------------------------------*/

Route::get('admin/widgets/lists', function () {
    return view('admin.widgets.lists.index');
});

Route::get('admin/widgets/tables', function () {
    return view('admin.widgets.tables.index');
});

Route::get('admin/widgets/charts', function () {
    return view('admin.widgets.charts.index');
});

Route::get('admin/widgets/miscellaneous', function () {
    return view('admin.widgets.miscellaneous.index');
});

Route::get('admin/widgets/statistics', function () {
    return view('admin.widgets.statistics.index');
});

/* -----------------------------------------------
             Event-Route
--------------------------------------------------*/
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/eventEdit', [EventController::class, 'index']);
Route::get('/events/eventCreate', [EventController::class, 'index']);