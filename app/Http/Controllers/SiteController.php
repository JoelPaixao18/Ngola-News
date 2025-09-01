<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;
use App\Models\Category;
use App\Models\Publication;
use App\Models\Video;
use App\Models\Galery;

class SiteController extends Controller
{
    /* Função Home - exibindo todos os carrosseis de algumas noticias e eventos com mais destaques e mais recentes */
    public function home()
    {
        /* Sessão Noticia por Categoria - Puxando a noticia mais recente de cada categoria */
        $news = News::select('news.*')
            ->whereIn('news.id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('news')
                    ->groupBy('category_id');
            })
            ->orderBy('created_at', 'desc')
            ->take(6) // se quiser limitar a 6 no máximo
            ->get();
        $categories = Category::all();

        /* Sessão das Noticias de Hoje */
        $today = News::orderBy('created_at', 'desc')->take(2)->get();
        $today1 = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        /* --------- Sessão Noticia no Geral ----------------- */

        /* Noticias da categoria Politicas */
        $newsPolicy = News::whereHas('category', function ($query) {
            $query->where('name', ['Política', 'Politícas'])->take(6);
        })->get();

        /* Noticias da categoria Culturas */
        $newsCulture = News::whereHas('category', function ($query) {
            $query->where('name', ['Cultura', 'Culturas'])->take(6);
        })->get();

        /* Noticias de Categoria Desportos */
        $newsSports = News::whereHas('category', function ($query) {
            $query->where('name', ['Desporto', 'Desportos'])->take(6);
        })->get();

        /* --------- Sessão Ciências e Tecnologia */

        /* exibindo a mais recente e destacada */
        $newsTech1 = News::where('detach', 'destaque') // apenas notícias destaque
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
        $newsTech = News::whereHas('category', function ($query) {
            $query->where('name', 'Tecnologia')->orderByDesc('id')->take(4);
        })->get();

        $categories = Category::where('name->name')->get();
        $footerCategory = Category::all()->take(6);

        $videos = Video::where('detach', 'destaque')->orderByDesc('id')->first();


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
            'subscription'
        ));
    }

    /* Função Sobre - exibindo as informações do site */
    public function about()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        return view('site.about.index', compact('breaknews','footerCategory', 'subscription'));
    }

    /* Função Categoria - Mostando todas as categorias */
    public function category()
    {
        /* $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get(); */
        return view('site.category.index');
    }

    /* Eventos */

    public function eventCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $events = Event::with('category')->has('category')->get();
        return view('site.category.events.eventCategory', compact('events', 'breaknews','footerCategory', 'subscription'));
    }

    public function eventView(Event $event)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $event = Event::with('category', 'author')->findOrFail($event->id);
        return view('site.category.events.eventView', compact('event', 'breaknews','footerCategory', 'subscription'));
    }

    /* Notícias */

    public function NewsCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $news = News::with('category')->get();
        return view('site.category.news.newsCategory', compact('news', 'breaknews','footerCategory', 'subscription'));
    }


    public function newsView(News $news)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.news.newsView', compact('news', 'breaknews','footerCategory','subscription'));
    }

    /* Politicas */

    public function policy()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', 'Política');
        })->get();
        $categories = Category::where('name->name')->get();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        return view('site.category.policy.policy', compact('news', 'categories', 'breaknews','footerCategory', 'subscription'));
    }

    public function policyView(News $news)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.policy.policyView', compact('news', 'breaknews','footerCategory', 'subscription'));
    }

    /* Multimédia */

    public function publication()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $publications = Publication::with('ImgPdf')->get();
        return view('site.multimedia.publication', compact('publications', 'breaknews','footerCategory', 'subscription'));
    }

    public function videos()
    {
        $videos = Video::where('detach', 'destaque')->orderByDesc('id')->get();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        return view('site.multimedia.videos', compact('videos', 'breaknews','footerCategory', 'subscription'));
    }

    public function galery()
    {
        $galeries = Galery::all();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::all()->take(6);
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        return view('site.multimedia.galery', compact('galeries', 'breaknews','footerCategory', 'subscription'));
    }
    public function api()
    {
        $event = Event::all();
        return response()->json($event);
    }

    public function show($id)
    {
        $event = Event::find($id);
        if ($event) {
            return response()->json($event);
        } else {
            return response()->json(['message' => 'Evento não encontrado.'], 404);
        }
    }
}
