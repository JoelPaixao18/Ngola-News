@extends('layouts._site.main')

@section('title', 'Resultados da Pesquisa')

@section('content')
    <div class="container py-4">
        <h3>Resultados para: "{{ $query }}"</h3>


        {{--  @foreach ($news as $item)
                    <li>
                        <a href="{{ route('site.newsView', $item->id) }}">
                            {{ $item->title }}
                        </a>
                        <br>
                        <small>
                            Categoria: {{ $item->category->name ?? '---' }} |
                            Tipo: {{ $item->category->typeCategory->name ?? '---' }}
                        </small>
                    </li>
                @endforeach --}}

        <section class="space-top space-extra-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-9 col-lg-8">
                        <div class="mb-30">
                            @if ($news->count())
                                @foreach ($news as $item)
                                    <div class="border-blog2">
                                        <div class="blog-style4">
                                            <div class="blog-img img-big img-allnews">
                                                <img src="{{ asset('img/news/' . $item->image) }}" alt="blog image">
                                            </div>
                                            <div class="blog-content">
                                                @foreach ($categories as $category)
                                                    @if ($category->id == $item->category_id)
                                                        <a data-theme-color="#6234AC" href="blog.html" class="category">
                                                            {{ $category->name }}</a>
                                                    @endif
                                                @endforeach
                                                <h3 class="box-title-20">
                                                    <a class="hover-line"
                                                        href="{{ route('site.newsView', ['news' => $item]) }}">{{ Str::limit($item->title, 50) }}</a>
                                                </h3>
                                                <div class="blog-meta">
                                                    <a href="blog.html">
                                                        <i
                                                            class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>Nenhum resultado encontrado.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
