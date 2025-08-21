@extends('site.layout.main')
@section('title', 'Event Category')
@section('content-eventCategory')
    <div class="container">
        <div class="row">
            <div class="col-md-12 me-2">
                <h1 class="text-center">Event Category</h1>
                <p class="text-center">Explore the latest events in your area.</p>
            </div>
        </div>
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-4">
                <h3>{{ $event->title}}</h3>
                <h6>{{ $event->category ? $event->category->name : 'No Category' }}</h6>
            </div>
            @endforeach
        </div>
    </div>
@endsection