<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Advertisement;

class SocietyController extends Controller
{
    public function society()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', ['Sociedade', 'Sociedades']);
        })->orderByDesc('id')->paginate(6);

        $categories = Category::where('name')->get();

        /* Ultimas noticias - Trás as 3 ultimas noticias*/
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->get()->take(3);

        /* Subscrição - mostrando um  modal com a imagem da noticia mais recentes */
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        /* Footer - trazendo os primeiros 5 nomes das categorias sem repetir nenhum e trás tmbm as duas ultimas noticias*/
        $footerCategory = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);
            
        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.category.society.society', compact(
            'news',
            'categories',
            'breaknews',
            'footerCategory',
            'subscription',
            'Recent',
            'RecentPost',
            'ads'
        ));
    }
}
