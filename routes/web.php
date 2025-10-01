<?php

use Illuminate\Support\Facades\Route;

/* site controllers */
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CultureController;
use App\Http\Controllers\Site\EconomicController;
use App\Http\Controllers\Site\GaleryController;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\PolicyController;
use App\Http\Controllers\Site\PublicationController;
use App\Http\Controllers\Site\SocietyController;
use App\Http\Controllers\Site\TechnologyController;
use App\Http\Controllers\Site\VideoController;
use App\Http\Controllers\Site\SubscriptionController;
use App\Http\Controllers\Site\CommentController;

/* end site controllers */
/*-------------------------------------------------------
                    Site Routes
-------------------------------------------------------*/

Route::redirect('/', 'site/home');
/* Route::get('admin/', function () {
    return view('admin.index');
}); */

Route::get('site/home', [HomeController::class, 'home'])->name('site.home');
/* Route::get('site/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('site/about', [SiteController::class, 'about'])->name('site.about'); */
/* Routas de Categorias */
/* Route::get('site/category', [SiteController::class, 'category'])->name('site.category'); */

/* Routas de Categoria - listagem */
Route::get('site/policy', [PolicyController::class, 'policy'])->name('site.policy');
Route::get('site/society', [SocietyController::class, 'society'])->name('site.society');
Route::get('site/economic', [EconomicController::class, 'economic'])->name('site.economic');
Route::get('site/culture', [CultureController::class, 'culture'])->name('site.culture');
Route::get('site/tech', [TechnologyController::class, 'tech'])->name('site.tech');
Route::get('site/newsCategory', [SiteController::class, 'newsCategory'])->name('site.newsCategory');
Route::get('site/eventCategory', [SiteController::class, 'eventCategory'])->name('site.eventCategory');
Route::get('site/allNews', [SiteController::class, 'allNews'])->name('site.allNews');

/* Routas de Visualizações */
Route::get('site/eventView/{event}', [SiteController::class, 'eventView'])->name('site.eventView');
Route::get('site/newsView/{news}', [NewsController::class, 'newsView'])->name('site.newsView');

Route::get('site/publication', [PublicationController::class, 'publication'])->name('site.publication');
Route::get('site/videos', [VideoController::class, 'videos'])->name('site.videos');
Route::get('site/galery', [GaleryController::class, 'galery'])->name('site.galery');

/* search routes */
Route::get('/pesquisa', [NewsController::class, 'search'])->name('news.search');

/* Rota de subscrição */
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');

/* Rota de Comentarios */
Route::post('/comment/store/{news}', [CommentController::class, 'store'])->name('site.comment.store');




