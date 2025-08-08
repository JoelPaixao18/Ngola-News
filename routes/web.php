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
                    News routes
-------------------------------------------------------*/
Route::prefix('admin.news')->name('admin.')->group(function () {
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('newsCreate', [NewsController::class, 'create'])->name('news.create');
    Route::post('newsStore', [NewsController::class, 'store'])->name('news.store');
    Route::get('newsEdit/{news}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::get('newsViews/{news}', [NewsController::class, 'show'])->name('news.view');
    Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete');
});


/* -----------------------------------------------
                    Event Routes
--------------------------------------------------*/
/*
Route::prefix('admin.events')->name('admin.')->group(function () {
    Route::get('events', [EventController::class, 'index'])->name('categories.index');
});
*/
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/eventEdit', [EventController::class, 'edit']);
Route::get('/events/eventCreate', [EventController::class, 'create']);


Route::get('/events/eventEdit', [EventController::class, 'index']);
Route::get('/events/eventCreate', [EventController::class, 'index']);
Route::prefix('admin/events')->name('admin.')->group(function () {
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::get('eventCreate', [EventController::class, 'create'])->name('event.create');
    /* Route::post('eventStore', [EventController::class, 'store'])->name('event.store');
    Route::get('eventEdit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::put('eventUpdate/{id}', [EventController::class, 'update'])->name('event.update');
    Route::get('eventView/{id}', [EventController::class, 'show'])->name('event.view');
    Route::delete('eventDelete/{id}', [EventController::class, 'destroy'])->name('event.delete'); */
});
