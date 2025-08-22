<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;
use App\Models\Category;

class SiteController extends Controller
{
    public function home()
    {
        $categories = Category::where('name->name')->get();
        $news = News::orderBy('created_at', 'desc')->take(6)->get();
        $today = News::orderBy('created_at', 'desc')->take(2)->get();
        $today1 = News::where('detach', 'destaque')->orderByDesc('id')->first();
        /* $events = Event::with('category')->has('category')->orderByDesc('id')->take(6)->get(); */

        return view('site.home.index', compact('categories', 'news', 'today', 'today1'));
    }

    public function contact()
    {
        return view('site.contact.index');
    }
    public function about()
    {
        return view('site.about.index');
    }
    public function category()
    {
        return view('site.category.index');
    }
    public function NewsCategory()
    {
        $news = News::with('category')->get();
        return view('site.category.newsCategory', compact('news'));
    }
    public function eventCategory()
    {
        $events = Event::with('category')->has('category')->get();
        return view('site.category.eventCategory', compact('events'));
    }
}
