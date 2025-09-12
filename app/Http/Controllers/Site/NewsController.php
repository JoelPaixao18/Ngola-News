<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
     public function newsView(News $news)
    {
        // Busca a notícia atual
        $news = News::with('category')->findOrFail($news->id);

        // Busca notícias relacionadas pela categoria
        $Related = News::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id) // exclui a própria notícia
            ->latest()
            ->get()
            ->take(6); // quantidade de relacionadas

        /* Ultimas noticias - Trás as 3 ultimas noticias*/
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();

        /* Subscrição - mostrando um  modal com a imagem da noticia mais recentes */
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        /* Footer - trazendo os primeiros 5 nomes das categorias sem repetir nenhum e trás tmbm as duas ultimas noticias*/
        $footerCategory = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $categories = Category::all();
        /* $categories = Category::where('name')->get(); */

        return view('site.category.news.newsView', compact('news', 'breaknews', 'footerCategory', 'subscription', 'Recent', 'RecentPost', 'Related', 'categories'));
    }
}
