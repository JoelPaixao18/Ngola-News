@extends('layouts._site.main')
@section('title', 'Publicação')
@section('content')

    <link rel="stylesheet" href="{{ url('flipbook/assets/style.css') }}">

    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="home-newspaper.html">Home</a></li>
                <li>Blog Masonary</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="row gy-30 filter-active">
                        @if ($publications)
                            @foreach ($publications as $publication)
                                <div class="filter-item col-xl-4 col-sm-6">
                                    <div class="blog-style1">
                                        <div class="blog-img img-size"><img
                                                @if ($publication->cover) src="{{ asset('img/publication/' . $publication->cover) }}"
                                            @else
                                                src="{{ asset('img/publication/pdfimg.png') }}" @endif
                                                alt="blog image"></div>
                                        <h3 class="box-title-20"><a class="hover-line" id="modallink" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">{{ $publication->title }}</a></h3>
                                        <div class="blog-meta">
                                            @if ($publication->file && file_exists(public_path('files/publication/' . $publication->file)))
                                                <a href="{{ asset('files/publication/' . $publication->file) }}" download>
                                                    <i class="fas fa-file-pdf me-1"></i> Baixar PDF
                                                </a>
                                            @else
                                                <span class="text-muted">Nenhum arquivo PDF disponível</span>
                                            @endif
                                            <a href="#"><i
                                                    class="fal fa-calendar-days"></i>{{ $publication->updated_at->format('d M, Y') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 text-center my-5">
                                <p class="alert alert-warning fs-5 py-4 px-5">
                                    Nenhuma publicação encontrada no momento.
                                </p>
                            </div>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content" >
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Botão para abrir flipbook -->
                                        <button class="btn btn-success"
                                            onclick="openFlipbook('{{ asset('files/publication/' . $publication->file) }}')">Abrir
                                            {{ $publication->title }}</button>
                                        <div id="book"></div>
                                        <input type="text" id="page-number" style="background-color: #0909096f; color:#fff; width:140px;">
                                        <span id="number-pages" style="background-color: #0909096f; color:#fff; width:140px; padding:15px 50px; border-radius:5px" ><br>
                                        <span class="btn btn-warning" id="prev-page">Anterior</span>
                                        <span class="btn btn-dark" id="next-page">Próxima</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Botão "Ver Mais" só aparece se houver publicações --}}
                    <div class="th-pagination mt-40">
                        {{ $publications->links('vendor.pagination.custom') }}
                    </div>
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
                                                <a class="hover-line" href="blog-details.html">{{ $recents->title }}</a>
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
        $(document).ready(function() {
            $("#flipbook{{ $publication->id ?? '' }}").turn({
                width: 800,
                height: 600,
                autoCenter: true
            });
        

            function openPublicationModal(title, img, description, date) {
                document.getElementById('PublicationModalLabel').textContent = title;
                document.getElementById('PublicationModalImg').src = img;
                document.getElementById('PublicationModalDescription').textContent = description;
                document.getElementById('PublicationModalDate').textContent = date;
                var modal = new bootstrap.Modal(document.getElementById('PublicationModal'));
                modal.show();
            }
        });
    </script>
@endsection
