@extends('layouts._site.main')
@section('title', 'Assessorarte- Política')
@section('content')

    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Políticas</li>
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

                        {{-- <div class="border-blog2">
                            <div class="blog-style4">
                                <div class="blog-img w-386">
                                    <img src="assets/img/blog/blog_6_4_1.jpg" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#FF9500" href="blog.html" class="category">Politics</a>
                                    <h3 class="box-title-30">
                                        <a class="hover-line" href="blog-details.html">Politics matters Let your voice shape
                                            the
                                            future.</a>
                                    </h3>
                                    <p class="blog-text">
                                        Encapsulates the belief that embracing diversity
                                        and engaging in Constructive dialogue are
                                        fundamental to the growth
                                    </p>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>13 Mar,
                                            2025</a>
                                    </div>
                                    <a href="blog-details.html" class="th-btn style2">Read More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="border-blog2">
                            <div class="blog-style4">
                                <div class="blog-img w-386">
                                    <img src="assets/img/blog/blog_6_4_2.jpg" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#FF9500" href="blog.html" class="category">Politics</a>
                                    <h3 class="box-title-30">
                                        <a class="hover-line" href="blog-details.html">Where voices merge, solutions emerge,
                                            and
                                            progress prevails.</a>
                                    </h3>
                                    <p class="blog-text">
                                        Encapsulates the belief that embracing diversity
                                        and engaging in Constructive dialogue are
                                        fundamental to the growth
                                    </p>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>28 Mar,
                                            2025</a>
                                    </div>
                                    <a href="blog-details.html" class="th-btn style2">Read More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="border-blog2">
                            <div class="blog-style4">
                                <div class="blog-img w-386">
                                    <img src="assets/img/blog/blog_6_4_3.jpg" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#FF9500" href="blog.html" class="category">Politics</a>
                                    <h3 class="box-title-30">
                                        <a class="hover-line" href="blog-details.html">Vote for unity, progress, and the
                                            betterment
                                            of our society.</a>
                                    </h3>
                                    <p class="blog-text">
                                        Encapsulates the belief that embracing diversity
                                        and engaging in Constructive dialogue are
                                        fundamental to the growth
                                    </p>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>17 Mar,
                                            2025</a>
                                    </div>
                                    <a href="blog-details.html" class="th-btn style2">Read More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="border-blog2">
                            <div class="blog-style4">
                                <div class="blog-img w-386">
                                    <img src="assets/img/blog/blog_6_4_4.jpg" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#FF9500" href="blog.html" class="category">Politics</a>
                                    <h3 class="box-title-30">
                                        <a class="hover-line" href="blog-details.html">Politics fuels progress, ignites
                                            societal
                                            transformation</a>
                                    </h3>
                                    <p class="blog-text">
                                        Encapsulates the belief that embracing diversity
                                        and engaging in Constructive dialogue are
                                        fundamental to the growth
                                    </p>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>18 Mar,
                                            2025</a>
                                    </div>
                                    <a href="blog-details.html" class="th-btn style2">Read More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="border-blog2">
                            <div class="blog-style4">
                                <div class="blog-img w-386">
                                    <img src="assets/img/blog/blog_6_4_5.jpg" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#FF9500" href="blog.html" class="category">Politics</a>
                                    <h3 class="box-title-30">
                                        <a class="hover-line" href="blog-details.html">Empower voices, shape the future &
                                            forge
                                            collective change.</a>
                                    </h3>
                                    <p class="blog-text">
                                        Encapsulates the belief that embracing diversity
                                        and engaging in Constructive dialogue are
                                        fundamental to the growth
                                    </p>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>27 Mar,
                                            2025</a>
                                    </div>
                                    <a href="blog-details.html" class="th-btn style2">Read More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="border-blog2">
                            <div class="blog-style4">
                                <div class="blog-img w-386">
                                    <img src="assets/img/blog/blog_6_4_6.jpg" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#FF9500" href="blog.html" class="category">Politics</a>
                                    <h3 class="box-title-30">
                                        <a class="hover-line" href="blog-details.html">Diversity and dialogue build a
                                            stronger nation
                                            together.</a>
                                    </h3>
                                    <p class="blog-text">
                                        Encapsulates the belief that embracing diversity
                                        and engaging in Constructive dialogue are
                                        fundamental to the growth
                                    </p>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>28 Mar,
                                            2025</a>
                                    </div>
                                    <a href="blog-details.html" class="th-btn style2">Read More<i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div> --}}
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
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword" />
                                <button type="submit">
                                    <i class="far fa-search"></i>
                                </button>
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
                                    {{-- <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg"
                                                alt="Blog Image" /></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="hover-line" href="blog-details.html">Embrace the game Ignite your
                                                sporting</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>22 June,
                                                2025</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg"
                                                alt="Blog Image" /></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="hover-line" href="blog-details.html">Revolutionizing lives Through
                                                technology</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>23 June,
                                                2025</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-4.jpg"
                                                alt="Blog Image" /></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="hover-line" href="blog-details.html">Enjoy the Virtual Reality
                                                embrace the</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-days"></i>25 June,
                                                2025</a>
                                        </div>
                                    </div>
                                </div> --}}
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
                        @foreach ($ads as $ad)
                            <div class="widget">
                                <div class="widget-ads">
                                    <a href="{{ $ad->link }}">
                                        <img class="w-100" src="{{ url('img/ads/' . $ad->image) }}" alt="ads" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        {{-- Fim das Publicidades --}}
                        {{-- Tags Populares --}}
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                <a href="{{ route('site.policy') }}">Politicas</a>
                                <a href="{{ route('site.economic') }}">Economia</a>
                                <a href="{{ route('site.tech') }}">Tecnologia</a>
                                <a href="{{ route('site.society') }}">sociedade</a>
                            </div>
                        </div>
                        {{-- Fim das Tags Populares --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
