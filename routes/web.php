<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;


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
                    Category routes
-------------------------------------------------------*/

Route::prefix('admin.categories')->name('admin.')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categoryCreate', [CategoryController::class, 'create'])->name('category.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('categoryView/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('categoryEdit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('categoryUpdate/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('categoryDelete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
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
                    News routes
-------------------------------------------------------*/
/*
Route::resource('news', NewsController::class);

Route::prefix('admin.news')->name('admin.')->group(function () {
    Route::get('newsCreate', [NewsController::class, 'index'])->name('create');
}); */


/*
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
*/
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
                    Event Routes
--------------------------------------------------*/
Route::prefix('admin/events')->name('admin.')->group(function () {
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::get('eventCreate', [EventController::class, 'create'])->name('event.create');
    Route::post('eventStore', [EventController::class, 'store'])->name('event.store');
    Route::get('eventEdit/{event}', [EventController::class, 'edit'])->name('event.edit');
    //Route::put('eventUpdate/{event}', [EventController::class, 'update'])->name('event.update');
    Route::get('eventView/{event}', [EventController::class, 'show'])->name('event.view');
    Route::get('eventDelete/{event}', [EventController::class, 'destroy'])->name('event.delete');
});
