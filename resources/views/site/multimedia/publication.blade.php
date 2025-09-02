@extends('site.layout.main')
@section('title', 'Publicação')
@section('content-publication')

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
                                        <h3 class="box-title-20"><a href="#"
                                                onclick="openPublicationModal(
                                            '{{ addslashes($Publication->title) }}',
                                            '{{ asset('img/galeries/' . ($Publication->image ?? 'pdfimg.png')) }}',
                                            '{{ addslashes($Publication->description) }}',
                                            '{{ $Publication->updated_at }}'
                                        )">
                                            {{ $publication->title }}
                                        </a></h3>
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
                            <div class="filter-item col-xl-4 col-sm-6">
                                <div class="blog-style1">
                                    <div class="blog-img img-size">
                                        <img
                                            @if ($publication->cover)
                                                src="{{ asset('img/publication/' . $publication->cover) }}"
                                            @else
                                                src="{{ asset('img/publication/pdfimg.png') }}"
                                            @endif
                                            alt="blog image">
                                    </div>
                                    <h3 class="box-title-20">
                                        <a class="hover-line" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">{{ $publication->title }}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        @if ($publication->file && file_exists(public_path('files/publication/' . $publication->file)))
                                            <a href="{{ asset('files/publication/' . $publication->file) }}" download>
                                                <i class="fas fa-file-pdf me-1"></i> Baixar PDF
                                            </a>
                                        @else
                                            <span class="text-muted">Nenhum arquivo PDF disponível</span>
                                        @endif
                                        <a href="#">
                                            <i class="fal fa-calendar-days"></i>{{ $publication->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="PublicationModal" tabindex="-1" aria-labelledby="PublicationModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="PublicationModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <div id="book">
                                            <div class="cover bg-danger">
                                                <h1>O Livro</h1>
                                            </div>
                                        </div>
                                        <div id="controls" class="mt-3">
                                            <label for="page-number">Pagina:</label> <input type="text" size="3"
                                                id="page-number"> de <span id="number-pages"></span>
                                        </div> --}}
                                        {{-- <h1>{{ $publication->title }}</h1>
                                        <iframe src="/files/publication/{{$publication->file}}" width="100%" height="600px"></iframe> --}}

                                        <!-- Botão para abrir flipbook -->
                                        <button
                                            onclick="openFlipbook('{{ asset('files/publication/' . $publication->file) }}')">Abrir
                                            {{$publication->title}}</button>
                                        <div id="book"></div>
                                        <input type="text" id="page-number">
                                        <span id="number-pages"></span>
                                        <span id="prev-page">Anterior</span>
                                        <span id="next-page">Próxima</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    {{-- Botão "Ver Mais" só aparece se houver publicações --}}
                    @if ($publications->count() > 0)
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
                        <div class="widget">
                            <h3 class="widget_title">Postagens Recentes</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="hover-line" href="blog-details.html">Fitness:
                                                Your journey to Better, stronger you.</a></h4>
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="fal fa-calendar-days"></i>21 June, 2025</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="hover-line" href="blog-details.html">Embrace
                                                the game Ignite your sporting</a></h4>
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="fal fa-calendar-days"></i>22 June, 2025</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="hover-line"
                                                href="blog-details.html">Revolutionizing lives Through technology</a>
                                        </h4>
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="fal fa-calendar-days"></i>23 June, 2025</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="assets/img/blog/recent-post-1-4.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="hover-line" href="blog-details.html">Enjoy the
                                                Virtual Reality embrace the</a></h4>
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="fal fa-calendar-days"></i>25 June, 2025</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-ads"><a
                                    href="../../../../themeforest.net/user/themeholy/portfolio.html"><img class="w-100"
                                        src="assets/img/ads/siderbar_ads_1.jpg" alt="ads"></a></div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Esportes</a>
                                <a href="blog.html">Políticas</a>
                                <a href="blog.html">Negócios</a>
                                <a href="blog.html">úsica</a>
                                <a href="blog.html">Comida</a>
                                <a href="blog.html">Tecnologia</a>
                                <a href="blog.html">Viagens</a>
                                <a href="blog.html">Saúde</a>
                                <a href="blog.html">Moda</a>
                                <a href="blog.html">Animais</a>
                                <a href="blog.html">Weather</a>
                                <a href="blog.html">Movies</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ url('flipbook/assets/turn.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#flipbook{{ $publication->id ?? '' }}").turn({
                width: 800,
                height: 600,
                autoCenter: true
            });
        });
        function openPublicationModal(title, img, description, date) {
            document.getElementById('PublicationModalLabel').textContent = title;
            document.getElementById('PublicationModalImg').src = img;
            document.getElementById('PublicationModalDescription').textContent = description;
            document.getElementById('PublicationModalDate').textContent = date;
            var modal = new bootstrap.Modal(document.getElementById('PublicationModal'));
            modal.show();
        }
    </script>
@endsection
