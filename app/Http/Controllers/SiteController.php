<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;
use App\Models\Category;
use App\Models\Publication;
use App\Models\Video;
use App\Models\Galery;
use App\Models\Advertisement;

class SiteController extends Controller
{
    /* Função Home - exibindo todos os carrosseis de algumas noticias com mais destaques e mais recentes */
    public function home()
    {

        /* Noticia da Categoria Politica com mais destaques */
        $newsDetach = News::where('detach', 'destaque') // apenas notícias destaque
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
        $news = News::whereIn('id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('news')
                ->groupBy('category_id');
        })
            ->orderBy('created_at', 'desc')
            ->take(6) // limita a 6 categorias no máximo
            ->get();
        /* fim */

        $categories = Category::all();

        /* Sessão das Noticias de Hoje */
        $today = News::orderBy('created_at', 'desc')->take(2)->get();
        $today1 = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        /* --------- Sessão da Categoria de Notícias (algumas categorias) ----------------- */

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
            $query->where('name', ['Tecnologia', 'Tecnologia'])->orderByDesc('id')->take(4);
        })->get();

        /* Sessão de Economia e Negocio */
        $Economic = News::whereHas('category', function ($query) {
            $query->where('name', ['Economia', 'Economias'])->orderByDesc('id')->take(5);
        })->get();

        /* Sessão de Sociedade */
        $Society = News::whereHas('category', function ($query) {
            $query->where('name', ['Sociedade', 'Sociedades'])->orderByDesc('id')->take(5);
        })->get();

        $categories = Category::where('name')->get();

        $footerCategory = Category::select('name')
            ->distinct()
            
            ->take(5)
            ->get();

        /* Sessão de Videos */
        $videos = Video::where('detach', 'destaque')->orderByDesc('id')->first();

        /* Posts Recentes no Footer */
        $Recent = News::orderBy('updated_at', 'desc')->take(2)->get();

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
    /* Fim da função Home */

    /* Função Sobre - exibindo as informações do site */
    /* public function about()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::select('name')
            ->distinct()
            
            ->take(5)
            ->get();
        $Recent = News::orderBy('updated_at', 'desc')->take(2)->get();
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        return view('site.about.index', compact('breaknews', 'footerCategory', 'subscription', 'Recent'));
    } */

    /* Função Categoria - Mostando todas as categorias */
    public function category()
    {
        /* $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get(); */
        return view('site.category.index');
    }

    /* Eventos */

    /* public function eventCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::select('name')
            ->distinct()
            
            ->take(5)
            ->get();
        $Recent = News::orderBy('updated_at', 'desc')->take(2)->get();
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $events = Event::with('category')->has('category')->get();
        return view('site.category.events.eventCategory', compact('events', 'breaknews', 'footerCategory', 'subscription', 'Recent'));
    } */

    /* public function eventView(Event $event)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::select('name')
            ->distinct()
            
            ->take(5)
            ->get();
        $Recent = News::orderBy('updated_at', 'desc')->take(2)->get();
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $event = Event::with('category', 'author')->findOrFail($event->id);
        return view('site.category.events.eventView', compact('event', 'breaknews', 'footerCategory', 'subscription', 'Recent'));
    } */

    /* Notícias */

    /* public function NewsCategory()
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::select('name')
            ->distinct()
            
            ->take(5)
            ->get();
        $Recent = News::orderBy('updated_at', 'desc')->take(2)->get();
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $news = News::with('category')->get();
        return view('site.category.news.newsCategory', compact('news', 'breaknews', 'footerCategory', 'subscription', 'Recent'));
    } */


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

    /* Politicas - Listagem de todas as noticias  */

    public function policy()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', ['Política', 'Políticas']);
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
            ->take(5) ;
           

        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.category.policy.policy', compact(
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
    /* Fim da categoria Politica - Menu */

    /* Sociedade - Listagem de todas as noticias  */
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
    /* Fim da categoria Sociedade - Menu */

    /* Economia - Listagem de todas as noticias  */
    public function economic()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', ['Economia', 'Economias']);
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

        return view('site.category.economic.economic', compact(
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
    /* Fim da categoria Economia - Menu */

    /* Economia - Listagem de todas as noticias  */
    public function culture()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', ['Cultura', 'Culturas']);
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

        return view('site.category.culture.culture', compact(
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
    /* Fim da categoria Economia - Menu */

    /* Economia - Listagem de todas as noticias  */
    public function tech()
    {
        $news = News::whereHas('category', function ($query) {
            $query->where('name', ['Tecnologia', 'Tecnologias']);
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

        return view('site.category.tech.tech', compact(
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
    /* Fim da categoria Economia - Menu */

    /*  public function policyView(News $news)
    {
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();
        $footerCategory = Category::select('name')
            ->distinct()
            
            ->take(5)
            ->get();
        $Recent = News::orderBy('updated_at', 'desc')->take(2)->get();
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();
        $news = News::with('category')->findOrFail($news->id);
        return view('site.category.policy.policyView', compact('news', 'breaknews', 'footerCategory', 'subscription', 'Recent'));
    } */

    /* Multimédia */

    public function publication()
    {

        $publications = Publication::orderBy('updated_at', 'desc')->paginate(18);

        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->get()->take(3);

        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        $footerCategory = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);

        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.multimedia.publication', compact(
            'publications',
            'breaknews',
            'footerCategory',
            'subscription',
            'Recent',
            'RecentPost',
            'ads'
        ));
    }
    //fim Multimedia

    /* inicio menu videos */
    public function videos()
    {
        $videos = Video::where('detach', 'destaque')->orderByDesc('id')->get();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->get()->take(3);

        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        $footerCategory = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);

        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.multimedia.videos', compact(
            'videos',
            'breaknews',
            'footerCategory',
            'subscription',
            'Recent',
            'RecentPost',
            'ads'
        ));
    }
    /* fim do menu videos */

    /* inicio do menu galeria */
    public function galery()
    {
        $galeries = Galery::orderByDesc('id')->get();
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->get()->take(3);

        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        $footerCategory = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);

        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.multimedia.galery', compact(
            'galeries',
            'breaknews',
            'footerCategory',
            'subscription',
            'Recent',
            'RecentPost',
            'ads'
        ));
    }
    /* fim do menu galeria */

    /*  public function api()
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
    } */
}
