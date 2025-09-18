<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class dashController extends Controller
{
    //
    public function management()
    {
        $publicNews = count(News::where('status', 'published')->get());//número de noticias publicadas
        $filedNews = count(News::where('status', 'filed')->get());//número de notícias arquivadas
        $draftNews = count(News::where('status', 'draft')->get());//número de notícias em rascunho
        $qtdNews = count(News::all());//número total de notícias
        $publicNewsPrecent = number_format((100 * $publicNews)/$qtdNews,1);//porcentagem de notícias publicadas
        $filedNewsPrecent = number_format((100 * $filedNews)/$qtdNews,1);//porcentagem de notícias arquivadas
        $draftNewsPrecent = number_format((100 * $draftNews)/$qtdNews,1);//porcentagem de notícias em rascunho
        $users = User::paginate(5);//bucando ustilizadores

        //número de notícias por categoria
        $economicNews = count( News::whereHas('category', function ($query) {
            $query->where('name', ['Política', 'Políticas']);
        })->orderByDesc('id')->get());
        $economicNewsPercent = number_format((100 * $economicNews)/$qtdNews,1);//porcentagem de notícias econômicas
        $politicsNews = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Política');
        })->get());
        $politicsNewsPercent = number_format((100 * $politicsNews)/$qtdNews,1);//porcentagem de notícias políticas
        $cultureNews = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Cultura');
        })->get());
        $cultureNewsPercent = number_format((100 * $cultureNews)/$qtdNews,1);//porcentagem de notícias culturais
        $technologyNews = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Tecnologia');
        })->get());
        $technologyNewsPercent = number_format((100 * $technologyNews)/$qtdNews,1);//porcentagem de notícias tecnológicas
        $socialNews = count(News::whereHas('category', function ($query) {
            $query->where('name', 'Sociedade');
        })->get());
        $socialNewsPercent = number_format((100 * $socialNews)/$qtdNews,1);//porcentagem de notícias sociais
        //fim número de notícias por categoria
        return view('_admin.dashboard.crm.index',compact(
            'qtdNews',
            'publicNews',
            'publicNewsPrecent',
            'filedNews',
            'filedNewsPrecent',
            'draftNews',
            'draftNewsPrecent',
            'economicNews',
            'economicNewsPercent',
            'politicsNews',
            'politicsNewsPercent',
            'cultureNews',
            'cultureNewsPercent',
            'technologyNews',
            'technologyNewsPercent',
            'socialNews',
            'socialNewsPercent',
            'users'
        ));
    }
}
