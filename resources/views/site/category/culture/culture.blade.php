@extends('layouts._site.main')
@section('title', 'Assessorarte- Cultura')
@section('content')

    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Culturas</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                {{-- Listagem das Categotias  --}}
                <div class="col-xxl-9 col-lg-8">
                    <div class="mb-30">
                        @if ($news->count())
                            @foreach ($news as $item)
                                <div class="border-blog2">
                                    <div class="blog-style4">
                                        <div class="blog-img w-386 img-card-policy">
                                            <img src="{{ asset('/img/news/' . $item->image) }}" alt="blog image" />
                                        </div>
                                        <div class="blog-content">
                                            @foreach ($categories as $category)
                                                @if ($item->category_id == $category->id)
                                                    <a data-theme-color="#FF9500" href="#"
                                                        class="category">{{ $category->name }}</a>
                                                @endif
                                            @endforeach
                                            <h3 class="box-title-30">
                                                <a class="hover-line"
                                                    href="{{ route('site.newsView', ['news' => $item]) }}">{{ Str::limit($item->title, 50) }}</a>
                                            </h3>
                                            <p class="blog-text">{{ Str::limit($item->subtitle, 100) }}</p>
                                            <div class="blog-meta">
                                                <a href="#"><i class="far fa-user"></i>{{ $item->author }}</a>
                                                <a href="#"><i
                                                        class="fal fa-calendar-days"></i>{{ $item->updated_at->format('d M, Y') }}</a>
                                            </div>
                                            <a href="{{ route('site.newsView', ['news' => $item]) }}"
                                                class="th-btn style2">Ver mais<i class="fas fa-arrow-up-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Nenhuma notícia encontrada em Política.</p>
                        @endif
                    </div>
                    {{-- Paginação --}}
                    <div class="th-pagination mt-40">
                        {{ $news->links('vendor.pagination.custom') }}
                    </div>
                    {{-- Fim de Paginação --}}
                </div>
                {{-- Fim da listagem  --}}
                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">
                        {{-- Pesquisa por Tag(Etiquetas)/Palavras-chaves --}}
                        <div class="widget widget_search">
                            <form class="search-form" action="{{ route('news.search') }}" method="GET">
                                <input type="text" name="q" placeholder="Palavra-chave/Tag(Etiqueta)"
                                    value="{{ request('q') }}" />
                                <button type="submit">
                                    <i class="far fa-search"></i>
                                </button>
                            </form>
                        </div>
                        {{-- Fim da div de pesquisa --}}
                        {{-- Sessão de categorias - Links --}}
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_1.jpg"
                                        href="{{ route('site.policy') }}">Políticas</a></li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_2.jpg"
                                        href="{{ route('site.society') }}">Sociedades</a>
                                </li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_3.jpg"
                                        href="{{ route('site.economic') }}">Economia
                                        &
                                        Negócios</a>
                                </li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_4.jpg"
                                        href="{{ route('site.culture') }}">Artes &
                                        Culturas</a>
                                </li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_5.jpg"
                                        href="{{ route('site.tech') }}">Ciências
                                        Tecnologia</a>
                                </li>
                                {{-- <li><a data-bg-src="assets/img/bg/category_bg_1_6.jpg" href="blog.html">Entretenimento</a>
                                </li> --}}
                            </ul>
                        </div>
                        {{-- Fim de Sessão das Categorias - Links --}}
                        {{-- Sessão dos Posts Recentes --}}
                        <div class="widget">
                            <h3 class="widget_title">Posts Recentes</h3>
                            @forelse ($RecentPost as $recents)
                                <div class="recent-post-wrap">
                                    <div class="recent-post">
                                        <div class="media-img img-footer">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('img/news/' . $recents->image) }}"
                                                    alt="Blog Image" /></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title">
                                                <a class="hover-line"
                                                    href="blog-details.html">{{ Str::limit($recents->title, 50) }}</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.html"><i
                                                        class="fal fa-calendar-days"></i>{{ $recents->updated_at->format('d M, Y') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                        </div>

                        <div class="col-12 text-center my-5">
                            <p class="alert alert-warning fs-5 py-4 px-5">
                                Nenhum post recente de momento.
                            </p>
                        </div>
                        @endforelse
                        {{-- Fim de Sesssão dos Postes Recentes --}}
                        {{-- Publicidades --}}
                        <br>
                        {{-- Publicidades --}}
                        @foreach ($ads as $ad)
                            <div class="widget">
                                <div class="widget-ads img-ads2">
                                    <a href="{{ $ad->link }}">
                                        <img class="w-100" src="{{ url('img/ads/' . $ad->image) }}" alt="ads" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        {{-- Fim das Publicidades --}} {{-- Tags das Categorias --}}
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                <a href="{{ route('site.policy') }}">Politicas</a>
                                <a href="{{ route('site.economic') }}">Economia</a>
                                <a href="{{ route('site.tech') }}">Tecnologia</a>
                                <a href="{{ route('site.society') }}">sociedade</a>
                            </div>
                        </div>
                        {{-- Fim das Tags de Categoria --}}
                        {{-- Subscrição --}}
                        @if (!request()->cookie('subscribed'))
                            <div class="widget newsletter-widget3"
                                data-bg-src="{{ url('site/assets/img/bg/line_bg_1.png') }}">
                                <div class="mb-4">
                                    <img src="{{ url('site/assets/img/bg/newsletter_img_2.png') }}" alt="Icon">
                                </div>
                                <h3 class="box-title-24 mb-20">Subscreve Agora</h3>
                                <form id="subscribeForm" class="newsletter-form"
                                    data-action="{{ route('subscribe.store') }}">
                                    @csrf
                                    @include('form._formSubscription.index')
                                </form>

                                <div id="subscribeMessage" class="mt-2"></div>
                            </div>
                        @endif
                        {{-- Fim de Subscrição --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
