<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;

class SiteController extends Controller
{
    public function home(){
        return view('site.home.index');
    }

    public function contact(){
        return view('site.contact.index');
    }
    public function about(){
        return view('site.about.index');
    }
    public function category(){
        return view('site.category.index');
    }
    public function NewsCategory(){
        $news = News::with('category')->get();
        return view('site.category.newsCategory', compact('news'));
    }
    public function eventCategory(){
        $events = Event::with('category')->has('category')->get();
        return view('site.category.eventCategory', compact('events'));
    }
}