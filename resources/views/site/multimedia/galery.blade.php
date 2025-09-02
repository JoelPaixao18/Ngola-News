@extends('site.layout.main')
@section('title', 'Galeria de Fotos')
@section('content-galery')
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
                        @if ($galeries)
                            @foreach ($galeries as $galery)
                                <div class="filter-item col-xl-4 col-sm-6">
                                    <div class="blog-style1">
                                        <div class="blog-img img-size"><img class="rounded "
                                                @if ($galery->image) src="{{ asset('img/galeries/' . $galery->image) }}"
                                            @else
                                                src="{{ asset('img/galeries/pdfimg.png') }}" @endif
                                                alt="{{ $galery->title }}"></div>

                                        <h3 class="box-title-20"><a href="#"
                                                onclick="openGaleryModal(
                                            '{{ addslashes($galery->title) }}',
                                            '{{ asset('img/galeries/' . ($galery->image ?? 'pdfimg.png')) }}',
                                            '{{ addslashes($galery->description) }}',
                                            '{{ $galery->updated_at }}'
                                        )">
                                                {{ Str::limit($galery->title, 20, '...') }}
                                            </a></h3>
                                        <div class="blog-meta">
                                            <a href="#"><i
                                                    class="fal fa-calendar-days"></i>{{ $galery->created_at->format('d M, Y') }}</a>
                                        </div>
                                        {{--  <button onclick="take()">get id</button> --}}
                                        {{-- <div id="takeId" style="display: none">
                                            <input type="text" id="galeryId" value="1">
                                        </div> --}}{{-- <input type="text" id="galeryId" value="{{$galery->id}}"> --}}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="filter-item col-xl-4 col-sm-6">
                                <div class="blog-style1">
                                    <div class="blog-img"><img src="{{ url('site/assets/img/blog/masonary_1_1.jpg') }}"
                                            alt="blog image"> <a data-theme-color="#868101" href="blog.html"
                                            class="category">Action</a></div>
                                    <h3 class="box-title-20"><a class="hover-line" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Eureka moments
                                            science journey enlightenment</a></h3>
                                    <div class="blog-meta"><a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>16 Mar, 2025</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="galeryModal" tabindex="-1" aria-labelledby="galeryModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="galeryModalLabel"></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4 me-2">
                                                <img id="galeryModalImg" src="" alt=""
                                                    style="max-width:100%">
                                            </div>
                                            <div class="col-md-4 me-2">
                                                <label>Descrição:</label>
                                                <span id="galeryModalDescription"></span><br>
                                                <label>Data:</label>
                                                <span id="galeryModalDate"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-40 mb-30 text-center"><a href="blog-masonary.html" class="th-btn">Ver Mais</a></div>
                </div>
                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form"><input type="text" placeholder="Enter Keyword"> <button
                                    type="submit"><i class="far fa-search"></i></button></form>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_1.jpg"
                                        href="https://www.jornaldeangola.ao/noticias/6/desporto" target="blank">Futebol
                                        Nacional</a></li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_2.jpg"
                                        href="{{ route('site.policy') }}">Economia</a>
                                </li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_3.jpg"
                                        href="{{ route('site.policy') }}">Políticas</a>
                                </li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_4.jpg"
                                        href="{{ route('site.policy') }}">Saúde</a></li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_5.jpg"
                                        href="{{ route('site.policy') }}">Tecnologia</a>
                                </li>
                                <li><a data-bg-src="assets/img/bg/category_bg_1_6.jpg"
                                        href="{{ route('site.policy') }}">Arte & Cultura</a>
                                </li>
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
                            <div class="tagcloud"><a href="blog.html">Esportes</a> <a href="blog.html">Políticas</a> <a
                                    href="blog.html">Negócios</a> <a href="blog.html">úsica</a> <a
                                    href="blog.html">Comida</a> <a href="blog.html">Tecnologia</a> <a
                                    href="blog.html">Viagens</a> <a href="blog.html">Saúde</a> <a
                                    href="blog.html">Moda</a> <a href="blog.html">Animais</a> <a
                                    href="blog.html">Weather</a> <a href="blog.html">Movies</a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <script>
        function openGaleryModal(title, img, description, date) {
            document.getElementById('galeryModalLabel').textContent = title;
            document.getElementById('galeryModalImg').src = img;
            document.getElementById('galeryModalDescription').textContent = description;
            document.getElementById('galeryModalDate').textContent = date;
            var modal = new bootstrap.Modal(document.getElementById('galeryModal'));
            modal.show();
        }
    </script>
@endsection
