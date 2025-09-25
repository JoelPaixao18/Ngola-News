<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Comment;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use App\Models\Tag;
use App\Models\Subscription;

class NewsController extends Controller
{
    public function newsView(News $news)
    {
        // Carregar a notícia com os comentários e suas respectivas subscriptions
        $news = News::where('status', 'publicado')
        ->with(['category', 'comments.subscription', 'comments.replies.subscription'])  // Carregar as subscriptions corretamente
        ->findOrFail($news->id);

        // Busca notícias relacionadas pela categoria
        $Related = News::where('status', 'publicado')
            ->where('category_id', $news->category_id)
            ->where('id', '!=', $news->id) // exclui a própria notícia
            ->latest()
            ->get()
            ->take(6); // quantidade de relacionadas

        $users = User::all();
        $comments = Comment::all();

        /* Ultimas noticias - Trás as 3 ultimas noticias*/
        $breaknews = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->take(3)
            ->get();

        /* Subscrição - mostrando um  modal com a imagem da noticia mais recentes */
        $subscription = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->first();

        /* Pegando as tags(etiquetas) mais recentas nas Views */
        $tags = Tag::select('name')
            ->distinct()
            ->take(6)
            ->get();

        $tags1 = Tag::select('name')
            ->distinct()
            ->take(3)
            ->get();

        /* Footer - trazendo os primeiros 5 nomes das categorias sem repetir nenhum e trás tmbm as duas ultimas noticias*/
        $footerCategory = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        $Recent = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->get()
            ->take(2);

        $RecentPost = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->get()
            ->take(4);

        $categories = Category::all();
        /* $categories = Category::where('name')->get(); */

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        /* $comments = $news->comments()->where('status', 'approved')->get(); */

        /* $user = auth()->user();
        if ($user) {
            $comments = Comment::where('user_id', $user->id)->get();
        } else {
            $comments = collect(); // Retorna uma coleção vazia se o usuário não estiver autenticado
        } */

        return view('site.category.news.newsView', compact(
            'news',
            'breaknews',
            'footerCategory',
            'subscription',
            'Recent',
            'RecentPost',
            'Related',
            'categories',
            'ads',
            'comments',
            'users',
            'tags',
            'tags1'
        ));
    }

     // Função de busca
    public function search(Request $request)
    {
        $query = $request->input('q');

        $news = News::where('status', 'publicado')->with(['category.typeCategory', 'tags'])
            ->where('title', 'like', "%{$query}%")
            ->orWhereHas('category', function ($q1) use ($query) {
                $q1->where('status', 'publicado')->where('name', 'like', "%{$query}%");
            })
            ->orWhereHas('category.typeCategory', function ($q2) use ($query) {
                $q2->where('status', 'publicado')->where('name', 'like', "%{$query}%");
            })
            ->orWhereHas('tags', function ($q3) use ($query) {
                $q3->where('status', 'publicado')->where('name', 'like', "%{$query}%");
            })
            ->get();

        $categories = Category::where('name')->get();

        $breaknews = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->get()->take(3);

        $subscription = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->first();

        $footerCategory = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);

        $Recent = News::where('status', 'publicado')->orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::where('status', 'publicado')->orderBy('updated_at', 'desc')->get()->take(4);

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.search-results.search', compact(
            'news',
            'query',
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
