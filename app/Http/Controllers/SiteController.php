<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;
use App\Models\Category;

class SiteController extends Controller
{
    /* Função Home - exibindo todos os carrosseis de algumas noticias e eventos com mais destaques e mais recentes */
    public function home()
    {
        $categories = Category::where('name->name')->get();
        $news = News::orderBy('created_at', 'desc')->take(6)->get();
        $today = News::orderBy('created_at', 'desc')->take(2)->get();
        $today1 = News::where('detach', 'destaque')->orderByDesc('id')->first();
        /* $events = Event::with('category')->has('category')->orderByDesc('id')->take(6)->get(); */

        return view('site.home.index', compact('categories', 'news', 'today', 'today1'));
    }

    /* Função Sobre - exibindo as informações do site */
    public function about()
    {
        return view('site.about.index');
    }

    /* Função Categoria - Mostando todas as categorias */
    public function category()
    {
        return view('site.category.index');
    }

    /* Eventos */

    public function eventCategory()
    {
        $events = Event::with('category')->has('category')->get();
        return view('site.category.events.eventCategory', compact('events'));
    }

    public function eventView(Event $event)
    {
        $event = Event::with('category', 'author')->findOrFail($event->id);
        return view('site.category.events.eventView', compact('event'));
    }

    /* Notícias */

    public function NewsCategory()
    {
        $news = News::with('category')->get();
        return view('site.category.news.newsCategory', compact('news'));
    }


    public function newsView(News $news)
    {
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.news.newsView', compact('news'));
    }

    /* Ppliticas */

    public function policy()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', 'Política');
        })->get();
        $categories = Category::where('name->name')->get();

        return view('site.category.policy.policy', compact('news', 'categories'));
    }

    public function policyView(News $news)
    {
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.policy.policyView', compact('news'));
    }
    public function publication()
    {
        return view('site.multimedia.publication');
    }
    public function videos()
    {
        return view('site.multimedia.videos');
    }
    public function api(){
        $event = Event::all();
        return response()->json($event);
    }
    public function apiShow(Event $event){
        $event = Event::find($event->id);
        return response()->json($event);
    }
}
