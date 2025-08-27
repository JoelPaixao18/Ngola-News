<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;
use App\Models\Category;
use App\Models\Publication;

class SiteController extends Controller
{
    /* Função Home - exibindo todos os carrosseis de algumas noticias e eventos com mais destaques e mais recentes */
    public function home()
    {
        $categories = Category::where('name->name')->get();
        $news = News::orderBy('created_at', 'desc')->take(6)->get();
        $today = News::orderBy('created_at', 'desc')->take(2)->get();
        $today1 = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        /* $events = Event::with('category')->has('category')->orderByDesc('id')->take(6)->get(); */

        return view('site.home.index', compact('categories', 'news', 'today', 'today1', 'breaknews'));
    }

    /* Função Sobre - exibindo as informações do site */
    public function about()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        return view('site.about.index', compact('breaknews'));
    }

    /* Função Categoria - Mostando todas as categorias */
    public function category()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        return view('site.category.index');
    }

    /* Eventos */

    public function eventCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $events = Event::with('category')->has('category')->get();
        return view('site.category.events.eventCategory', compact('events', 'breaknews'));
    }

    public function eventView(Event $event)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $event = Event::with('category', 'author')->findOrFail($event->id);
        return view('site.category.events.eventView', compact('event', 'breaknews'));
    }

    /* Notícias */

    public function NewsCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $news = News::with('category')->get();
        return view('site.category.news.newsCategory', compact('news', 'breaknews'));
    }


    public function newsView(News $news)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.news.newsView', compact('news', 'breaknews'));
    }

    /* Ppliticas */

    public function policy()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', 'Política');
        })->get();
        $categories = Category::where('name->name')->get();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();

        return view('site.category.policy.policy', compact('news', 'categories', 'breaknews'));
    }

    public function policyView(News $news)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.policy.policyView', compact('news', 'breaknews'));
    }
    public function publication()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $publications = Publication::all();
        return view('site.multimedia.publication', compact('publications', 'breaknews'));
    }
    public function videos()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        return view('site.multimedia.videos', compact('breaknews'));
    }
    public function api(){
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
