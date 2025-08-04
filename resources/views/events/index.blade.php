<!-- resources/views/events/index.blade.php -->

@extends('layouts.app') {{-- ou layout base do seu projeto --}}

@section('content')
    <h1>Lista de Eventos</h1>

    <ul>
        @foreach($events as $event)
            <li>{{ $event->title }} - {{ $event->date }}</li>
        @endforeach
    </ul>
@endsection