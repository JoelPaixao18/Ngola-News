<?php

 use Illuminate\Support\Facades\Route;

/* Admin controllers */
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TypeCategoryController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\AdvertisementController;
/* end admin controllers */

/* auth controllers */
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
/* end auth controllers */



/* Routas de admin */
Route::group(['middleware' => ['auth', 'role:admin']], function () {

    /* dasboard */
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('admin/dashboard', function () {
        return view('_admin.dashboard.crm.index');
    });

});
/* Routas Editor */
Route::group(['middleware' => ['auth', 'role:admin,editor']], function () {
    
    /*Category routes*/
    Route::prefix('admin.categories')->name('admin.')->group(function () {
        Route::get('list', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('details/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
    });

    /* news routes */
    Route::prefix('admin.news')->name('admin.')->group(function () {
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('create', [NewsController::class, 'create'])->name('news.create');
        Route::post('newsStore', [NewsController::class, 'store'])->name('news.store');
        Route::get('edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::get('details/{news}', [NewsController::class, 'show'])->name('news.view');
        Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete');
        Route::resource('tags', TagController::class);
    });

    /* comments routes */
    Route::prefix('admin/comments')->name('admin.')->group(function () {
        Route::get('comment', [CommentController::class, 'index'])->name('comments.index');
        Route::get('create', [CommentController::class, 'create'])->name('comment.create');
        Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store');
        Route::get('edit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
        Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update');
        Route::get('details/{comment}', [CommentController::class, 'show'])->name('comment.view');
        Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');
    });
    /* tags routes */
    Route::prefix('admin.tags')->name('admin.')->group(function () {
        Route::get('tags', [TagController::class, 'index'])->name('tags.index');
        Route::get('create', [TagController::class, 'create'])->name('tag.create');
        Route::post('tagStore', [TagController::class, 'store'])->name('tag.store');
        Route::get('edit
/{tag}', [TagController::class, 'edit'])->name('tag.edit');
        Route::put('tagUpdate/{tag}', [TagController::class, 'update'])->name('tag.update');
        Route::get('tagView/{tag}', [TagController::class, 'show'])->name('tag.view');
        Route::get('tagDelete/{tag}', [TagController::class, 'destroy'])->name('tag.delete');
    });

    /* typeCategory routes */
    Route::prefix('admin.typeCategories')->name('admin.')->group(function () {
        Route::get('typeCategory', [TypeCategoryController::class, 'index'])->name('typeCategories.index');
        Route::get('create', [TypeCategoryController::class, 'create'])->name('typeCategory.create');
        Route::post('typeCategories', [TypeCategoryController::class, 'store'])->name('typeCategories.store');
        Route::get('typeview/{typeCategory}', [TypeCategoryController::class, 'show'])->name('typeCategory.show');
        Route::get('typeedit/{typeCategory}', [TypeCategoryController::class, 'edit'])->name('typeCategory.edit');
        Route::put('typeCategoryUpdate/{typeCategory}', [TypeCategoryController::class, 'update'])->name('typeCategory.update');
        Route::get('typeCategoryDelete/{typeCategory}', [TypeCategoryController::class, 'destroy'])->name('typeCategory.delete');
    });
    /* publications routes */
    Route::prefix('admin/publications')->name('admin.')->group(function () {
        Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
        Route::get('create', [PublicationController::class, 'create'])->name('publication.create');
        Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store');
        Route::get('edit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit');
        Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update');
        Route::get('details/{publication}', [PublicationController::class, 'show'])->name('publication.view');
        Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete');
    });
    /* videos routes */
    Route::prefix('admin/videos')->name('admin.')->group(function () {
        Route::get('video', [VideoController::class, 'index'])->name('video.index');
        Route::get('create', [VideoController::class, 'create'])->name('video.create');
        Route::post('videoStore', [VideoController::class, 'store'])->name('video.store');
        Route::get('edit/{video}', [videoController::class, 'edit'])->name('video.edit');
        Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update');
        Route::get('details/{video}', [videoController::class, 'show'])->name('video.view');
        Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete');
    });
    /* galery routes */
    Route::prefix('admin/galeries')->name('admin.')->group(function () {
        Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');
        Route::get('create', [GaleryController::class, 'create'])->name('galery.create');
        Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store');
        Route::get('edit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit');
        Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update');
        Route::get('details/{galery}', [GaleryController::class, 'show'])->name('galery.view');
        Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete');
    });
    /* users routes */
    Route::prefix('admin.users')->name('admin.')->group(function () {
        Route::get('user', [UserController::class, 'index'])->name('user.index');
        Route::get('create', [UserController::class, 'create'])->name('user.create');
        Route::post('userStore', [UserController::class, 'store'])->name('user.store');
        Route::get('details/{user}', [UserController::class, 'show'])->name('user.show');
        Route::get('edit/{user}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('userUpdate/{user}', [UserController::class, 'update'])->name('user.update');
        Route::get('userDelete/{user}', [UserController::class, 'destroy'])->name('user.delete');
    });
});
/* Routas Jornalista*/
Route::group(['middleware' => ['auth', 'role:admin,editor,jornalista']], function () {
  
    /* news routes */
    Route::prefix('admin.news')->name('admin.')->group(function () {
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('create', [NewsController::class, 'create'])->name('news.create');
        Route::post('newsStore', [NewsController::class, 'store'])->name('news.store');
        Route::get('edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::get('details/{news}', [NewsController::class, 'show'])->name('news.view');
        Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete');
        Route::resource('tags', TagController::class);
    });
    /* comments routes */
    Route::prefix('admin/comments')->name('admin.')->group(function () {
        Route::get('comment', [CommentController::class, 'index'])->name('comments.index');
        Route::get('create', [CommentController::class, 'create'])->name('comment.create');
        Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store');
        Route::get('edit/{comment}', [CommentController::class, 'edit'])->name('comment.edit');
        Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update');
        Route::get('details/{comment}', [CommentController::class, 'show'])->name('comment.view');
        Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');
    });
    /* publications routes */
    Route::prefix('admin/publications')->name('admin.')->group(function () {
        Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
        Route::get('create', [PublicationController::class, 'create'])->name('publication.create');
        Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store');
        Route::get('edit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit');
        Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update');
        Route::get('details/{publication}', [PublicationController::class, 'show'])->name('publication.view');
        Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete');
    });
    /* videos routes */
    Route::prefix('admin/videos')->name('admin.')->group(function () {
        Route::get('video', [VideoController::class, 'index'])->name('video.index');
        Route::get('create', [VideoController::class, 'create'])->name('video.create');
        Route::post('videoStore', [VideoController::class, 'store'])->name('video.store');
        Route::get('edit/{video}', [videoController::class, 'edit'])->name('video.edit');
        Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update');
        Route::get('details/{video}', [videoController::class, 'show'])->name('video.view');
        Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete');
    });
    /* galery routes */
    Route::prefix('admin/galeries')->name('admin.')->group(function () {
        Route::get('galery', [GaleryController::class, 'index'])->name('galery.index');
        Route::get('create', [GaleryController::class, 'create'])->name('galery.create');
        Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store');
        Route::get('edit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit');
        Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update');
        Route::get('details/{galery}', [GaleryController::class, 'show'])->name('galery.view');
        Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete');
    });
});
/* Routas Assinante */
Route::group(['middleware' => ['auth', 'role:assinante']], function () {
    
});
/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/
/* Route::get('admin/dashboard', function () {
    return view('admin.dashboard.crm.index');
})->middleware(['auth', 'role:admin']); */
/*-------------------------------------------------------
                    Category routes
-------------------------------------------------------*/

/* Route::prefix('admin.categories')->name('admin.')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
    Route::get('categoryCreate', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
    Route::get('view/{category}', [CategoryController::class, 'show'])->name('category.show')->middleware('auth');
    Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
    Route::put('categoryUpdate/{category}', [CategoryController::class, 'update'])->name('category.update')->middleware('auth');
    Route::get('categoryDelete/{category}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth');
}); */
/*-------------------------------------------------------
                    Author routes
-------------------------------------------------------*/
/* 
Route::prefix('admin.authors')->name('admin.')->group(function () {
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
/* Route::prefix('admin.news')->name('admin.')->group(function () {
    Route::get('news', [NewsController::class, 'index'])->name('news.index')->middleware('auth');
    Route::get('create', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
    Route::post('newsStore', [NewsController::class, 'store'])->name('news.store')->middleware('auth');
    Route::get('edit/{news}', [NewsController::class, 'edit'])->name('news.edit')->middleware('auth');
    Route::put('newsUpdate/{news}', [NewsController::class, 'update'])->name('news.update')->middleware('auth');
    Route::get('details/{news}', [NewsController::class, 'show'])->name('news.view')->middleware('auth');
    Route::get('newsDelete/{news}', [NewsController::class, 'destroy'])->name('news.delete')->middleware('auth');
    Route::resource('tags', TagController::class);
}); */


/* -----------------------------------------------
                    Event Routes
--------------------------------------------------*/
/* Route::prefix('admin/events')->name('admin.')->group(function () {
    Route::get('event', [EventController::class, 'index'])->name('event.index')->middleware('auth');
    Route::get('eventCreate', [EventController::class, 'create'])->name('event.create')->middleware('auth');
    Route::post('eventStore', [EventController::class, 'store'])->name('event.store')->middleware('auth');
    Route::get('eventEdit/{event}', [EventController::class, 'edit'])->name('event.edit')->middleware('auth');
    Route::put('eventUpdate/{event}', [EventController::class, 'update'])->name('event.update')->middleware('auth');
    Route::get('eventView/{event}', [EventController::class, 'show'])->name('event.view')->middleware('auth');
    Route::get('eventDelete/{event}', [EventController::class, 'destroy'])->name('event.delete')->middleware('auth');
}); */


/*-------------------------------------------------------
                    Comment Routes
-------------------------------------------------------*/

/* Route::prefix('admin/comments')->name('admin.')->group(function () {
    Route::get('comment', [CommentController::class, 'index'])->name('comments.index')->middleware('auth');
    Route::get('create', [CommentController::class, 'create'])->name('comment.create')->middleware('auth');
    Route::post('commentStore', [CommentController::class, 'store'])->name('comment.store')->middleware('auth');
    Route::get('edit/{comment}', [CommentController::class, 'edit'])->name('comment.edit')->middleware('auth');
    Route::put('commentUpdate/{comment}', [CommentController::class, 'update'])->name('comment.update')->middleware('auth');
    Route::get('details/{comment}', [CommentController::class, 'show'])->name('comment.view')->middleware('auth');
    Route::get('commentDelete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete')->middleware('auth');
}); */

/*-------------------------------------------------------
                    Tags Routes
-------------------------------------------------------*/

/* Route::prefix('admin.tags')->name('admin.')->group(function () {
    Route::get('tags', [TagController::class, 'index'])->name('tags.index')->middleware('auth');
    Route::get('create', [TagController::class, 'create'])->name('tag.create')->middleware('auth');
    Route::post('tagStore', [TagController::class, 'store'])->name('tag.store')->middleware('auth');
    Route::get('edit
/{tag}', [TagController::class, 'edit'])->name('tag.edit')->middleware('auth');
    Route::put('tagUpdate/{tag}', [TagController::class, 'update'])->name('tag.update')->middleware('auth');
    Route::get('tagView/{tag}', [TagController::class, 'show'])->name('tag.view')->middleware('auth');
    Route::get('tagDelete/{tag}', [TagController::class, 'destroy'])->name('tag.delete')->middleware('auth');
}); */

/*-------------------------------------------------------
               TypeCategory Routes
-------------------------------------------------------*/

/* Route::prefix('admin.typeCategories')->name('admin.')->group(function () {
    Route::get('typeCategory', [TypeCategoryController::class, 'index'])->name('typeCategories.index')->middleware('auth');
    Route::get('create', [TypeCategoryController::class, 'create'])->name('typeCategory.create')->middleware('auth');
    Route::post('typeCategories', [TypeCategoryController::class, 'store'])->name('typeCategories.store')->middleware('auth');
    Route::get('typeview/{typeCategory}', [TypeCategoryController::class, 'show'])->name('typeCategory.show')->middleware('auth');
    Route::get('typeedit/{typeCategory}', [TypeCategoryController::class, 'edit'])->name('typeCategory.edit')->middleware('auth');
    Route::put('typeCategoryUpdate/{typeCategory}', [TypeCategoryController::class, 'update'])->name('typeCategory.update')->middleware('auth');
    Route::get('typeCategoryDelete/{typeCategory}', [TypeCategoryController::class, 'destroy'])->name('typeCategory.delete')->middleware('auth');
}); */

/* -----------------------------------------------
                    publication Routes
--------------------------------------------------*/
/* Route::prefix('admin/publications')->name('admin.')->group(function () {
    Route::get('publication', [PublicationController::class, 'index'])->name('publication.index')->middleware('auth');
    Route::get('create', [PublicationController::class, 'create'])->name('publication.create')->middleware('auth');
    Route::post('publicationStore', [PublicationController::class, 'store'])->name('publication.store')->middleware('auth');
    Route::get('edit/{publication}', [PublicationController::class, 'edit'])->name('publication.edit')->middleware('auth');
    Route::put('publicationUpdate/{publication}', [PublicationController::class, 'update'])->name('publication.update')->middleware('auth');
    Route::get('details/{publication}', [PublicationController::class, 'show'])->name('publication.view')->middleware('auth');
    Route::get('publicationDelete/{publication}', [PublicationController::class, 'destroy'])->name('publication.delete')->middleware('auth');
}); */
/* -----------------------------------------------
                    video Routes
--------------------------------------------------*/
/* Route::prefix('admin/videos')->name('admin.')->group(function () {
    Route::get('video', [VideoController::class, 'index'])->name('video.index')->middleware('auth');
    Route::get('create', [VideoController::class, 'create'])->name('video.create')->middleware('auth');
    Route::post('videoStore', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
    Route::get('edit/{video}', [videoController::class, 'edit'])->name('video.edit')->middleware('auth');
    Route::put('videoUpdate/{video}', [videoController::class, 'update'])->name('video.update')->middleware('auth');
    Route::get('details/{video}', [videoController::class, 'show'])->name('video.view')->middleware('auth');
    Route::get('videoDelete/{video}', [videoController::class, 'destroy'])->name('video.delete')->middleware('auth');
}); */
/* -----------------------------------------------
                    galery Routes
--------------------------------------------------*/
/* Route::prefix('admin/galeries')->name('admin.')->group(function () {
    Route::get('galery', [GaleryController::class, 'index'])->name('galery.index')->middleware('auth');
    Route::get('create', [GaleryController::class, 'create'])->name('galery.create')->middleware('auth');
    Route::post('galeryStore', [GaleryController::class, 'store'])->name('galery.store')->middleware('auth');
    Route::get('edit/{galery}', [GaleryController::class, 'edit'])->name('galery.edit')->middleware('auth');
    Route::put('galeryUpdate/{galery}', [GaleryController::class, 'update'])->name('galery.update')->middleware('auth');
    Route::get('details/{galery}', [GaleryController::class, 'show'])->name('galery.view')->middleware('auth');
    Route::get('galeryDelete/{galery}', [GaleryController::class, 'destroy'])->name('galery.delete')->middleware('auth');
}); */

/*-------------------------------------------------------
                    Ads routes
-------------------------------------------------------*/

Route::prefix('admin.ads')->name('admin.')->group(function () {
    Route::get('ads', [AdvertisementController::class, 'index'])->name('ads.index')->middleware('auth');
    Route::get('create', [AdvertisementController::class, 'create'])->name('ads.create')->middleware('auth');
    Route::post('ads', [AdvertisementController::class, 'store'])->name('ads.store')->middleware('auth');
    /* Route::get('view/{category}', [AdvertisementController::class, 'show'])->name('category.show');
    Route::get('edit/{category}', [AdvertisementController::class, 'edit'])->name('category.edit');
    Route::put('categoryUpdate/{category}', [AdvertisementController::class, 'update'])->name('category.update');
    Route::get('categoryDelete/{category}', [AdvertisementController::class, 'destroy'])->name('category.delete'); */
});
/*-------------------------------------------------------
                        User routes
    -------------------------------------------------------*/

/* Route::prefix('admin.users')->name('admin.')->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
    Route::get('create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
    Route::post('userStore', [UserController::class, 'store'])->name('user.store')->middleware('auth');
    Route::get('details/{user}', [UserController::class, 'show'])->name('user.show')->middleware('auth');
    Route::get('edit/{user}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
    Route::put('userUpdate/{user}', [UserController::class, 'update'])->name('user.update')->middleware('auth');
    Route::get('userDelete/{user}', [UserController::class, 'destroy'])->name('user.delete')->middleware('auth');
}); */

/*-------------------------------------------------------
                    Auth routes
-------------------------------------------------------*/

Auth::routes();
Route::redirect('/home', '/admin');
/* Route::get('/admin', 'HomeController@index')->name('home'); */
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/pesquisa', [NewsController::class, 'search'])->name('news.search');
