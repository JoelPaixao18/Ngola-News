<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\Video;

class HomeController extends Controller
{
    public function home()
    {

        /* Noticia da Categoria Politica com mais destaques */
        $newsDetach = News::where('status', 'publicado')
            ->whereIn('detach', ['destaque','premium']) // apenas notícias destaque
            ->whereHas('category', function ($query) {
                $query->whereIn('name', [
                    'Politica',
                    'Politicas'
                ]);
            })
            ->orderByDesc('id') // pega a mais recente
            ->take(6)
            ->get();
        /* fim */

        /* Sessão Noticia por Categoria - Puxando a noticia mais recente de cada categoria */
        $news = News::where('status', 'publicado')
            ->whereIn('id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('news')
                    ->where('status', 'publicado')
                    ->groupBy('category_id');
            })
            ->orderBy('created_at', 'desc')
            ->take(6) // limita a 6 categorias no máximo
            ->get();
        /* fim */

        $categories = Category::all();

        /* Sessão das Noticias de Hoje */
        $today = News::where('status', 'publicado')->orderBy('created_at', 'desc')->take(2)->get();
        $today1 = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->first();
        $breaknews = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->take(3)->get();

        /* Modal de Subscrição */
        $subscription = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->first();

        /* --------- Sessão da Categoria de Notícias (algumas categorias) ----------------- */

        /* Noticias da categoria Politicas */
        $newsPolicy = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
                $query->whereIn('name', ['Política', 'Politícas']);
            })
            ->take(6)
            ->get();

        /* Noticias da categoria Culturas */
        $newsCulture = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
                $query->whereIn('name', ['Cultura', 'Culturas']);
            })
            ->take(6)
            ->get();

        /* Noticias de Categoria Desportos */
        $newsSports = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
                $query->whereIn('name', ['Desporto', 'Desportos']);
            })
            ->take(6)
            ->get();

        /* --------- Sessão Ciências e Tecnologia */

        /* exibindo a mais recente e destacada */
        $newsTech1 = News::where('status', 'publicado')
            ->where('detach', 'destaque') // apenas notícias destaque
            ->whereHas('category', function ($query) {
                $query->whereIn('name', [
                    'Tecnologia',
                    'Tecnologias',
                    'Ciência',
                    'Ciências'
                ]);
            })
            ->orderByDesc('id') // pega a mais recente
            ->first();


        /* exibindo as 4 primeiras mais recentas */
        $newsTech = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
            $query->whereIn('name', ['Tecnologia', 'Tecnologia'])->orderByDesc('id');
        })
        ->take(4)
        ->get();

        /* Sessão de Economia e Negocio */
        $Economic = News::where('status', 'publicado')
            ->whereHas('category', function ($query) {
            $query->whereIn('name', ['Economia', 'Economias'])->orderByDesc('id');
        })
        ->take(5)
        ->get();

        /* Sessão de Sociedade */
        $Society = News::where('status', 'publicado')
        ->whereHas('category', function ($query) {
            $query->whereIn('name', ['Sociedade', 'Sociedades'])->orderByDesc('id');
        })
        ->take(5)
        ->get();

        $categories = Category::where('name')->get();

        $footerCategory = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        /* Sessão de Videos */
        $videos = Video::where('detach', 'destaque')->orderByDesc('id')->first();

        /* Posts Recentes no Footer */
        $Recent = News::where('status', 'publicado')->orderBy('updated_at', 'desc')->take(2)->get();

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.home.index', compact(
            'categories',
            'footerCategory',
            'news',
            'today',
            'today1',
            'newsPolicy',
            'newsTech',
            'newsTech1',
            'newsCulture',
            'newsSports',
            'breaknews',
            'videos',
            'subscription',
            'newsDetach',
            'Recent',
            'Economic',
            'Society',
            'ads'
        ));
    }
}
