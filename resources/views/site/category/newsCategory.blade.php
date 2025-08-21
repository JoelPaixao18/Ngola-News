@extends('site.layout.main')
@section('title', 'News Category')
@section('content-newsCategory')
    <div class="container">
        <div class="row">
            <div class="col-md-12 me-2">
                <h1 class="text-center">News Category</h1>
                <p class="text-center">Explore the latest news in your area.</p>
            </div>
        </div>
        <div class="row">
            @foreach($news as $newsItem)
            <div class="col-md-4">
                <h3>{{ $newsItem->title}}</h3>
                <h6>{{ $newsItem->category_id }}</h6>
            </div>
            @endforeach
        </div>
    </div>
@endsection