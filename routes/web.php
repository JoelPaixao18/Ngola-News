<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TypeCategoryController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\AdvertisementController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


/*-------------------------------------------------------
                    Site Routes
-------------------------------------------------------*/

Route::redirect('/', 'site/home');
/* Route::get('admin/', function () {
    return view('_admin.index');
}); */

Route::get('site/home', [SiteController::class, 'home'])->name('site.home');
Route::get('site/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('site/about', [SiteController::class, 'about'])->name('site.about');
/* Routas de Categorias */
Route::get('site/category', [SiteController::class, 'category'])->name('site.category');
Route::get('site/policy', [SiteController::class, 'policy'])->name('site.policy');
Route::get('site/society', [SiteController::class, 'society'])->name('site.society');
Route::get('site/economic', [SiteController::class, 'economic'])->name('site.economic');
Route::get('site/culture', [SiteController::class, 'culture'])->name('site.culture');
Route::get('site/tech', [SiteController::class, 'tech'])->name('site.tech');
Route::get('site/newsCategory', [SiteController::class, 'newsCategory'])->name('site.newsCategory');
Route::get('site/eventCategory', [SiteController::class, 'eventCategory'])->name('site.eventCategory');
Route::get('site/allNews', [SiteController::class, 'allNews'])->name('site.allNews');
/* Routas de Visualizações */
Route::get('site/eventView/{event}', [SiteController::class, 'eventView'])->name('site.eventView');
Route::get('site/newsView/{news}', [SiteController::class, 'newsView'])->name('site.newsView');
Route::get('site/policyView/{news}', [SiteController::class, 'policyView'])->name('site.policyView');
Route::get('site/publication', [SiteController::class, 'publication'])->name('site.publication');
Route::get('site/videos', [SiteController::class, 'videos'])->name('site.videos');
Route::get('site/galery', [SiteController::class, 'galery'])->name('site.galery');

/* API */
Route::get('site/api/', [SiteController::class, 'api'])->name('site.api');
Route::get('site/apiShow/{id}', [SiteController::class, 'apiShow'])->name('site.apiShow');

/*================================================================================================================ */


/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/
Route::get('admin/dashboard', function () {
    return view('_admin.dashboard.crm.index');
})->middleware('auth');
/*-------------------------------------------------------
                    Category routes
-------------------------------------------------------*/

Route::prefix('_admin.categories')->name('admin.')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
    Route::get('categoryCreate', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
    Route::get('categoryView/{category}', [CategoryController::class, 'show'])->name('category.show')->middleware('auth');
    Route::get('categoryEdit/{category}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
    Route::put('categoryUpdate/{category}', [CategoryController::class, 'update'])->name('category.update')->middleware('auth');
    Route::get('categoryDelete/{category}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth');
});
/*-------------------------------------------------------
                    Author routes
-------------------------------------------------------*/
/* 
Route::prefix('_admin.authors')->name('admin.')->group(function () {
    Route::get('author', [AuthorController::class, 'index'])->name('author.index')->middleware('auth');
    Route::get('authorCreate', [AuthorController::class, 'create'])->name('author.create')->middleware('auth');
    Route::post('authorStore', [AuthorController::class, 'store'])->name('author.store')->middleware('auth');
    Route::get('authorView/{author}', [AuthorController::class, 'show'])->name('author.show')->middleware('auth');
    Route::get('authorEdit/{author}', [AuthorController::class, 'edit'])->name('author.edit')->middleware('auth');
    Route::put('authorUpdate/{author}', [AuthorController::class, 'update'])->name('author.update')->middleware('auth');
    Route::get('authorDelete/{author}', [AuthorController::class, 'destroy'])->name('author.delete')->middleware('auth');
}); */


/*-------------------------------------------------------
                    News routes
-------------------------------------------------------*/
Route::prefix('_admin.news')->name('admin.')->group(function () {
    Route::get('news', [NewsController::class, 'index'])->name('news.index')->middleware('auth');
    Route::get('newsCreate', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
    Route::post('newsStore', [NewsController::class, 'store'])->name('news.store')->middleware('auth');
    Route::get('newsEdit/{news}', [NewsController::class, 'edit'])->name('news.edit')->middleware('auth');
    Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update')->middleware('auth');
    Route::get('newsViews/{news}', [NewsController::class, 'show'])->name('news.view')->middleware('auth');
    Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete')->middleware('auth');
    Route::resource('tags', TagController::class);
});


/* -----------------------------------------------
                    Event Routes
--------------------------------------------------*/
Route::prefix('_admin/events')->name('admin.')->group(function () {
    Route::get('event', [EventController::class, 'index'])->name('event.index')->middleware('auth');
    Route::get('eventCreate', [EventController::class, 'create'])->name('event.create')->middleware('auth');
    Route::post('eventStore', [EventController::class, 'store'])->name('event.store')->middleware('auth');
    Route::get('eventEdit/{event}', [EventController::class, 'edit'])->name('event.edit')->middleware('auth');
    Route::put('eventUpdate/{event}', [EventController::class, 'update'])->name('event.update')->middleware('auth');
    Route::get('eventView/{event}', [EventController::class, 'show'])->name('event.view')->middleware('auth');
    Route::get('eventDelete/{event}', [EventController::class, 'destroy'])->name('event.delete')->middleware('auth');
});


/*-------------------------------------------------------
                    Comment Routes
-------------------------------------------------------*/

Route::prefix('_admin/comments')->name('admin.')->group(function () {
    Route::get('comment', [CommentController::class, 'index'])->name('comments.index')->middleware('auth');
    Route::get('commentCreate', [CommentController::class, 'create'])->name('comment.create')->middleware('auth');
    Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store')->middleware('auth');
    Route::get('commentEdit/{comment}', [CommentController::class, 'edit'])->name('comment.edit')->middleware('auth');
    Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update')->middleware('auth');
    Route::get('commentView/{comment}', [CommentController::class, 'show'])->name('comment.view')->middleware('auth');
    Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete')->middleware('auth');
});

/*-------------------------------------------------------
                    Tags Routes
-------------------------------------------------------*/

Route::prefix('_admin.tags')->name('admin.')->group(function () {
    Route::get('tags', [TagController::class, 'index'])->name('tags.index')->middleware('auth');
    Route::get('tagCreate', [TagController::class, 'create'])->name('tag.create')->middleware('auth');
    Route::post('tagStore', [TagController::class, 'store'])->name('tag.store')->middleware('auth');
    Route::get('tagEdit/{tag}', [TagController::class, 'edit'])->name('tag.edit')->middleware('auth');
    Route::put('tagUpdate/{tag}', [TagController::class, 'update'])->name('tag.update')->middleware('auth');
    Route::get('tagView/{tag}', [TagController::class, 'show'])->name('tag.view')->middleware('auth');
    Route::get('tagDelete/{tag}', [TagController::class, 'destroy'])->name('tag.delete')->middleware('auth');
});

/*-------------------------------------------------------
               TypeCategory Routes
-------------------------------------------------------*/

Route::prefix('_admin.typeCategories')->name('admin.')->group(function () {
    Route::get('typeCategory', [TypeCategoryController::class, 'index'])->name('typeCategories.index')->middleware('auth');
    Route::get('typeCategoryCreate', [TypeCategoryController::class, 'create'])->name('typeCategory.create')->middleware('auth');
    Route::post('typeCategories', [TypeCategoryController::class, 'store'])->name('typeCategories.store')->middleware('auth');
    Route::get('typeCategoryView/{typeCategory}', [TypeCategoryController::class, 'show'])->name('typeCategory.show')->middleware('auth');
    Route::get('typeCategoryEdit/{typeCategory}', [TypeCategoryController::class, 'edit'])->name('typeCategory.edit')->middleware('auth');
    Route::put('typeCategoryUpdate/{typeCategory}', [TypeCategoryController::class, 'update'])->name('typeCategory.update')->middleware('auth');
    Route::get('typeCategoryDelete/{typeCategory}', [TypeCategoryController::class, 'destroy'])->name('typeCategory.delete')->middleware('auth');
});

/* -----------------------------------------------
                    publication Routes
--------------------------------------------------*/
Route::prefix('_admin/publications')->name('admin.')->group(function () {
    Route::get('publication', [PublicationController::class, 'index'])->name('publication.index')->middleware('auth');
    Route::get('publicationCreate', [PublicationController::class, 'create'])->name('publication.create')->middleware('auth');
    Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store')->middleware('auth');
    Route::get('publicationEdit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit')->middleware('auth');
    Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update')->middleware('auth');
    Route::get('publicationView/{publication}', [PublicationController::class, 'show'])->name('publication.view')->middleware('auth');
    Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete')->middleware('auth');
});
/* -----------------------------------------------
                    video Routes
--------------------------------------------------*/
Route::prefix('_admin/videos')->name('admin.')->group(function () {
    Route::get('video', [VideoController::class, 'index'])->name('video.index')->middleware('auth');
    Route::get('videoCreate', [VideoController::class, 'create'])->name('video.create')->middleware('auth');
    Route::post('videoStore', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
    Route::get('videoEdit/{video}', [videoController::class, 'edit'])->name('video.edit')->middleware('auth');
    Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update')->middleware('auth');
    Route::get('videoView/{video}', [videoController::class, 'show'])->name('video.view')->middleware('auth');
    Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete')->middleware('auth');
});
/* -----------------------------------------------
                    galery Routes
--------------------------------------------------*/
Route::prefix('_admin/galeries')->name('admin.')->group(function () {
    Route::get('galery', [GaleryController::class, 'index'])->name('galery.index')->middleware('auth');
    Route::get('galeryCreate', [GaleryController::class, 'create'])->name('galery.create')->middleware('auth');
    Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store')->middleware('auth');
    Route::get('galeryEdit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit')->middleware('auth');
    Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update')->middleware('auth');
    Route::get('galeryView/{galery}', [GaleryController::class, 'show'])->name('galery.view')->middleware('auth');
    Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete')->middleware('auth');
});

/*-------------------------------------------------------
                    Ads routes
-------------------------------------------------------*/

Route::prefix('_admin.ads')->name('admin.')->group(function () {
    Route::get('ads', [AdvertisementController::class, 'index'])->name('ads.index')->middleware('auth');
    Route::get('adsCreate', [AdvertisementController::class, 'create'])->name('ads.create')->middleware('auth');
    Route::post('ads', [AdvertisementController::class, 'store'])->name('ads.store')->middleware('auth');
    /* Route::get('categoryView/{category}', [AdvertisementController::class, 'show'])->name('category.show');
    Route::get('categoryEdit/{category}', [AdvertisementController::class, 'edit'])->name('category.edit');
    Route::put('categoryUpdate/{category}', [AdvertisementController::class, 'update'])->name('category.update');
    Route::get('categoryDelete/{category}', [AdvertisementController::class, 'destroy'])->name('category.delete'); */
});
/*-------------------------------------------------------
                    User routes
-------------------------------------------------------*/

Route::prefix('_admin.users')->name('admin.')->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
    Route::get('userCreate', [UserController::class, 'create'])->name('user.create')->middleware('auth');
    Route::post('userStore', [UserController::class, 'store'])->name('user.store')->middleware('auth');
    Route::get('userView/{user}', [UserController::class, 'show'])->name('user.show')->middleware('auth');
    Route::get('userEdit/{user}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
    Route::put('userUpdate/{user}', [UserController::class, 'update'])->name('user.update')->middleware('auth');
    Route::get('userDelete/{user}', [UserController::class, 'destroy'])->name('user.delete')->middleware('auth');
});

/*-------------------------------------------------------
                    Auth routes
-------------------------------------------------------*/

Auth::routes();
Route::redirect('/home', '/admin');
Route::get('/admin', 'HomeController@index')->name('home')->middleware('auth');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/pesquisa', [NewsController::class, 'search'])->name('news.search');
