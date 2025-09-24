<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Advertisement;
use App\Models\Galery;

class GaleryController extends Controller
{
    public function galery()
    {
        $galeries = Galery::orderByDesc('id')->paginate(12);
        $breaknews = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->get()
            ->take(3);

        $subscription = News::where('status', 'publicado')
            ->where('detach', 'destaque')
            ->orderByDesc('id')
            ->first();

        $footerCategory = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);

        $Recent = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->get()
            ->take(2);

        $RecentPost = News::where('status', 'publicado')
            ->orderBy('updated_at', 'desc')
            ->get()->take(4);

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
}
