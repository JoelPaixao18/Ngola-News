@extends('layouts._site.main')
@section('title', 'Galeria de Fotos')
@section('content')
    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="home-newspaper.html">Home</a></li>
                <li>Galeria</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="row gy-30 filter-active">
                        {{-- Loop de galerias com fallback --}}
                        @forelse ($galeries as $galery)
                            <div class="filter-item col-xl-4 col-sm-6">
                                <div class="blog-style1">
                                    <div class="blog-img img-size">
                                        <img class="rounded"
                                            @if ($galery->image) src="{{ asset('img/galeries/' . $galery->image) }}"
                                            @else
                                                src="{{ asset('img/galeries/pdfimg.png') }}" @endif
                                            alt="{{ $galery->title }}">
                                    </div>

                                    <h3 class="box-title-20">
                                        <a class="hover-line" data-bs-toggle="modal"
                                            data-bs-target="#modalGalery{{ $galery->id }}" id="img">
                                            {{ Str::limit($galery->title, 20, '...') }}
                                        </a>
                                    </h3>

                                    <div class="blog-meta">
                                        <a href="#">
                                            <i class="fal fa-calendar-days"></i>{{ $galery->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- Inicio do modal --}}
                            <div class="modal fade" id="modalGalery{{ $galery->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel{{ $galery->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $galery->id }}">
                                                {{ $galery->title }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row align-items-start">
                                                <div class="col-md-4 ms-4">
                                                    <img src="{{ asset('img/galeries/' . $galery->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="col-md-4 ms-4">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Título: <b> {{ $galery->title }}</b></li>
                                                        <li class="list-group-item">Data: {{ $galery->updated_at->format('d M, Y') }}</li>
                                                        <li class="list-group-item">Descrição: {{ $galery->description }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- fim do modal --}}
                        @empty
                            <div class="col-12 text-center my-5">
                                <p class="alert alert-warning fs-5 py-4 px-5">
                                    Nenhuma galeria encontrada no momento.
                                </p>
                            </div>
                        @endforelse
                    </div>

                    {{-- Botão "Ver Mais" só aparece se houver galerias --}}
                    @if ($galeries->count() > 0)
                        <div class="mt-40 mb-30 text-center">
                            <a href="blog-masonary.html" class="th-btn">Ver Mais</a>
                        </div>
                    @endif
                </div>

                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
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
                        {{-- Sessão dos Posts Recentes --}}

                        <div class="widget">
                            <h3 class="widget_title">Posts Recentes</h3>
                            @forelse ($RecentPost as $recents)
                                <div class="recent-post-wrap">
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="blog-details.html"><img
                                                    src="{{ asset('img/news/' . $recents->image) }}"
                                                    alt="Blog Image" /></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title">
                                                <a class="hover-line" id="modallink" href="blog-details.html">{{ $recents->title }}</a>
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
                        <div class="widget">
                            <div class="widget-ads"><a
                                    href="../../../../themeforest.net/user/themeholy/portfolio.html"><img class="w-100"
                                        src="assets/img/ads/siderbar_ads_1.jpg" alt="ads"></a></div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                <a href="{{ route('site.policy') }}">Politicas</a>
                                <a href="{{ route('site.economic') }}">Economia</a>
                                <a href="{{ route('site.tech') }}">Tecnologia</a>
                                <a href="{{ route('site.society') }}">sociedade</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <script>
        function take() {
            let id = document.querySelector('#galeryId').value
            window.alert(id);
        }
    </script>
@endsection
