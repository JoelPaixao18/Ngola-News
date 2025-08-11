<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthorController;

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
                    Author routes
-------------------------------------------------------*/

Route::prefix('admin.authors')->name('admin.')->group(function () {
    Route::get('author', [AuthorController::class, 'index'])->name('author.index');
    Route::get('authorCreate', [AuthorController::class, 'create'])->name('author.create');
    Route::post('authorStore', [AuthorController::class, 'store'])->name('author.store');
    Route::get('authorView/{author}', [AuthorController::class, 'show'])->name('author.show');
    Route::get('authorEdit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
    Route::put('authorUpdate/{author}', [AuthorController::class, 'update'])->name('author.update');
    Route::get('authorDelete/{author}', [AuthorController::class, 'destroy'])->name('author.delete');
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
Route::prefix('admin/events')->name('admin.')->group(function () {
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::get('eventCreate', [EventController::class, 'create'])->name('event.create');
    Route::post('eventStore', [EventController::class, 'store'])->name('event.store');
    Route::get('eventEdit/{event}', [EventController::class, 'edit'])->name('event.edit');
    Route::put('eventUpdate/{event}', [EventController::class, 'update'])->name('event.update');
    Route::get('eventView/{event}', [EventController::class, 'show'])->name('event.view');
    Route::get('eventDelete/{event}', [EventController::class, 'destroy'])->name('event.delete');
});


/*-------------------------------------------------------
                    Comment Routes
-------------------------------------------------------*/

Route::prefix('admin/comments')->name('admin.')->group(function () {
    Route::get('comment', [CommentController::class, 'index'])->name('comments.index');
    Route::get('commentCreate', [CommentController::class, 'create'])->name('comment.create');
    Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store');
    Route::get('commentEdit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update');
    Route::get('commentView/{comment}', [CommentController::class, 'show'])->name('comment.view');
    Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');
});
