<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Advertisement;
use App\Models\Video;

class VideoController extends Controller
{
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
}
