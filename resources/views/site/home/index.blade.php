@extends('layouts._site.main')
@section('title', 'Assessorarte- Home')
@section('content')
    {{-- Sessão dos noticias da categoria Politica com mais destaque e as mais recentes --}}
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1"
            data-adaptive-height="true">
            @foreach ($newsDetach as $detach)
                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-overlay="black" data-opacity="6"
                        data-bg-src="{{ url('img/news/' . $detach->image) }}">
                    </div>
                    <div class="container">
                        <div class="blog-bg-style1">
                            @foreach ($categories as $category)
                                @if ($category->id == $detach->category_id)
                                    <a data-theme-color="#6234AC" data-ani="slideinup" data-ani-delay="0.1s" href="#">
                                        {{ $category->name }}</a>
                                @endif
                            @endforeach
                            <br>
                            <h3 data-ani="slideinup" data-ani-delay="0.3s" class="box-title-50">
                                <a class="hover-line"
                                    href="{{ route('site.newsView', ['news' => $detach->id]) }}">{{ $detach->title }}</a>
                            </h3>
                            <div class="blog-meta" data-ani="slideinup" data-ani-delay="0.5s">
                                <a href="author.html">
                                    <i class="far fa-user"></i>By - Tnews
                                </a>
                                <a href="blog.html">
                                    <i class="fal fa-calendar-days"></i>{{ $detach->updated_at->format('d M, Y') }}
                                </a>
                            </div>
                            <p class="blog-text" data-ani="slideinup" data-ani-delay="0.7s">{{ $detach->subtitle }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="hero-tab-area">
            <div class="container">
                <div class="hero-tab" data-asnavfor=".hero-slider-1">
                    @foreach ($newsDetach as $detach)
                        <div class="tab-btn active img-detach">
                            <img src="{{ asset('img/news/' . $detach->image) }}" alt="Image">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Fim de Sessão dos noticias da categoria Politica com mais destaque e as mais recentes --}}
    <!-- ==================== noticias por categoria  ==================== -->
    <div class="space-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="sec-title has-line">Notícias por Categoria</h2>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slick-prev="#blog-slide7" class="slick-arrow default">
                                <i class="far fa-arrow-left"></i>
                            </button>
                            <button data-slick-next="#blog-slide7" class="slick-arrow default">
                                <i class="far fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Carrossel da Sessão Noticia por categoria --}}
            <div class="row th-carousel" id="blog-slide7" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2">
                @foreach ($news as $key => $news)
                    <div class="col-sm-6 col-lg-4 col-xl-3 dark-theme {{ $key == 0 ? 'active' : '' }}">
                        <div class="blog-style3">
                            <div class="blog-img img-card">
                                <img src="{{ asset('img/news/' . $news->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $news->category_id)
                                        <a data-theme-color="#6234AC" href="blog.html" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20">
                                    <a class="hover-line"
                                        href="{{ route('site.newsView', ['news' => $news]) }}">{{ Str::limit($news->title, 45) }}</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html">
                                        <i class="far fa-user"></i>By - Tnews
                                    </a>
                                    <a href="blog.html">
                                        <i class="fal fa-calendar-days"></i>{{ $news->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    {{-- Fim de noticias por categoria --}}
    <!-- ==================== Publicidade ==================== -->
    @foreach ($ads as $ad)
        <div class="container space-top img-ads">
            <a href="{{ $ad->link }}" target="_blank" class="ads-style1">
                <img class="light-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
                <img class="dark-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
            </a>
        </div>
    @endforeach
    {{-- Fim de Publicidade --}}

    <!-- ==================== Today News Section ==================== -->
    <section class="space">
        <div class="container">
            <h2 class="sec-title has-line">Notícias de Hoje</h2>
            <div class="row">
                <div class="col-xl-3">
                    <div class="row gy-4">
                        @foreach ($today as $key => $today)
                            <div class="col-xl-12 col-sm-6" {{ $key == 0 ? 'active' : '' }}>
                                <div class="blog-style1">
                                    <div class="blog-img img-today">
                                        <img src="{{ asset('img/news/' . $today->image) }}" alt="blog image">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $today->category_id)
                                                <a data-theme-color="#6234AC" href="#" class="category">
                                                    {{ $category->name }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                    <h3 class="box-title-22">
                                        <a class="hover-line"
                                            href="{{ route('site.newsView', ['news' => $today]) }}">{{ Str::limit($today->title, 45) }}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="author.html">
                                            <i class="far fa-user"></i>By - Tnews
                                        </a>
                                        <a href="blog.html">
                                            <i class="fal fa-calendar-days"></i>{{ $today->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-9 mt-4 mt-xl-0">
                    <div class="dark-theme space-40">
                        @if ($today1)
                            <div class="blog-style3">
                                <div class="blog-img img-big1">
                                    <img src="{{ asset('img/news/' . $today1->image) }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    @foreach ($categories as $category)
                                        @if ($category->id == $today1->category_id)
                                            <a data-theme-color="#6234AC" href="#" class="category">
                                                {{ $category->name }}</a>
                                        @endif
                                    @endforeach
                                    <h3 class="box-title-40">
                                        <a class="hover-line"
                                            href="{{ route('site.newsView', ['news' => $today1]) }}">{{ Str::limit($today1->title, 45) }}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="author.html">
                                            <i class="far fa-user"></i>By - Tnews
                                        </a>
                                        <a href="blog.html">
                                            <i
                                                class="fal fa-calendar-days"></i>{{ $today1->updated_at->format('d M, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Fim das Noticia de Hoje --}}
    {{-- =================== Video de exposição ==================== --}}
    <section class="bg-fixed dark-theme" data-bg-src="{{ url('site/assets/img/blog/blog_full_1.jpg') }}"
        data-overlay="black" data-opacity="7">
        <div class="container">
            <div class="row justify-content-center">
                @isset($videos)
                    <div class="col-lg-10 col-md-12">
                        <div class="video-container mt-4">
                            <iframe src="{{ $videos->embed_url }}"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </section>

    <!-- ==================== Algumas Categorias ==================== -->
    <section class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="sec-title has-line">Categorias de Notícias</h2>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="filter-menu filter-menu-active">
                            <button data-filter="*" class="tab-btn active" type="button">Todas</button>
                            <button data-filter=".cat1" class="tab-btn" type="button">Políticas</button>
                            <button data-filter=".cat2" class="tab-btn" type="button">Arets & Cultura</button>
                            <button data-filter=".cat3" class="tab-btn" type="button">Desporto</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-24 filter-active mbn-24">
                {{-- Noticia de destaque - todas as categorias que constão nessa sessão --}}
                @if ($today1)
                    <div class="col-xl-4 col-md-6 filter-item cat1">
                        <div class="blog-style3 dark-theme">
                            <div class="blog-img img-general">
                                <img src="{{ asset('img/news/' . $today1->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $today1->category_id)
                                        <a data-theme-color="#6234AC" href="#" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-24">
                                    <a class="hover-line"
                                        href="{{ route('site.newsView', ['news' => $today1]) }}">{{ Str::limit($today1->title, 45) }}</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html">
                                        <i class="far fa-user"></i>By - Tnews
                                    </a>
                                    <a href="blog.html">
                                        <i class="fal fa-calendar-days"></i>{{ $today1->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Fim de Notia de Cateforia --}}

                {{-- Categoria Politica --}}
                @foreach ($newsPolicy as $newspolicy)
                    <div class="col-xl-4 col-md-6 filter-item cat1">
                        <div class="blog-style2">
                            <div class="blog-img img-big img-allnews">
                                <img src="{{ asset('img/news/' . $newspolicy->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $newspolicy->category_id)
                                        <a data-theme-color="#6234AC" href="blog.html" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20">
                                    <a class="hover-line"
                                        href="{{ route('site.newsView', ['news' => $newspolicy]) }}">{{ Str::limit($newspolicy->title, 50) }}</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html">
                                        <i
                                            class="fal fa-calendar-days"></i>{{ $newspolicy->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Fim de Categoria Politica --}}

                {{-- Categoria de Cultura - trás 6 categotias da cultura --}}
                @foreach ($newsCulture as $newsculture)
                    <div class="col-xl-4 col-md-6 filter-item cat2">
                        <div class="blog-style2">
                            <div class="blog-img img-big img-allnews">
                                <img src="{{ asset('img/news/' . $newsculture->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $newsculture->category_id)
                                        <a data-theme-color="#6234AC" href="blog.html" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20">
                                    <a class="hover-line"
                                        href="{{ route('site.newsView', ['news' => $newsculture]) }}">{{ Str::limit($newsculture->title, 50) }}</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html">
                                        <i
                                            class="fal fa-calendar-days"></i>{{ $newsculture->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Fim de Categoria de Cultura --}}

                {{-- News Sports --}}
                @foreach ($newsSports as $newssport)
                    <div class="col-xl-4 col-md-6 filter-item cat3">
                        <div class="blog-style2">
                            <div class="blog-img img-big">
                                <img src="{{ asset('img/news/' . $newssport->image) }}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                @foreach ($categories as $category)
                                    @if ($category->id == $newssport->category_id)
                                        <a data-theme-color="#6234AC" href="blog.html" class="category">
                                            {{ $category->name }}</a>
                                    @endif
                                @endforeach
                                <h3 class="box-title-20">
                                    <a class="hover-line"
                                        href="{{ route('site.newsView', ['news' => $newssport->id]) }}">{{ Str::limit($newssport->title, 50) }}</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html">
                                        <i class="fal fa-calendar-days"></i>{{ $newssport->updated_at->format('d M, Y') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Fim de News Sports --}}
            </div>
        </div>
    </section>
    <!-- ==================== Fim de Algumas Categorias ==================== -->
    {{-- =================== Sessão de Tecnologia, Economia e Sociedade ================== --}}
    <section class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <h2 class="sec-title has-line">Ciências & Tecnologias</h2>
                    {{-- Noticia de Ciências e Tecnologia com destaque --}}
                    @if ($newsTech1)
                        <div class="mb-4">
                            <div class="dark-theme img-overlay2 space-40">
                                <div class="blog-style3">
                                    <div class="blog-img img-tech1">
                                        <img src="{{ asset('img/news/' . $newsTech1->image) }}"
                                            alt="{{ $newsTech1->title }}">
                                    </div>
                                    <div class="blog-content">
                                        <a data-theme-color="#6234AC"
                                            href="{{ route('site.newsCategory', $newsTech1->category->id) }}"
                                            class="category">
                                            {{ $newsTech1->category->name }}
                                        </a>
                                        <h3 class="box-title-40">
                                            <a class="hover-line" href="{{ route('site.newsView', $newsTech1->id) }}">
                                                {{ Str::limit($newsTech1->title, 85) }}
                                            </a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="#">
                                                <i class="far fa-user"></i> By - Tnews
                                            </a>
                                            <a href="#">
                                                <i class="fal fa-calendar-days"></i>
                                                {{ $newsTech1->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- Noticia de Ciências e Tecnologia exibindo as 4 mais recentes --}}
                    <div class="row gy-4">
                        @foreach ($newsTech as $newstech)
                            <div class="col-md-6">
                                <div class="blog-style2">
                                    <div class="blog-img img-tech">
                                        <img src="{{ asset('img/news/' . $newstech->image) }}" alt="blog image">
                                    </div>
                                    <div class="blog-content">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $newstech->category_id)
                                                <a data-theme-color="#6234AC" href="blog.html" class="category">
                                                    {{ $category->name }}</a>
                                            @endif
                                        @endforeach
                                        <h3 class="box-title-20">
                                            <a class="hover-line"
                                                href="{{ route('site.newsView', ['news' => $newstech->id]) }}">{{ Str::limit($newstech->title, 50) }}</a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="blog.html">
                                                <i
                                                    class="fal fa-calendar-days"></i>{{ $newstech->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- Fim de Noticias de Ciencias e Tecnologia --}}

                    {{-- Publicidade --}}
                    @foreach ($ads as $ad)
                        <div class="space mt-40 mb-40 img-ads">
                            <a href="{{ $ad->link }}" target="_blank" class="ads-style1">
                                <img class="w-100 light-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
                                <img class="w-100 dark-img" src="{{ asset('img/ads/' . $ad->image) }}" alt="ads">
                            </a>
                        </div>
                    @endforeach
                    {{-- Fim de Publicidade --}}

                    {{-- Sessão de Economia e Negócio --}}
                    <h2 class="sec-title has-line">Economia & Negócio</h2>
                    <div class="mbn-24">
                        @foreach ($Economic as $economic)
                            <div class="mb-4">
                                <div class="blog-style4">
                                    <div class="blog-img w-270">
                                        <img src="{{ url('img/news/' . $economic->image) }}" alt="blog image">
                                    </div>
                                    <div class="blog-content">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $economic->category_id)
                                                <a data-theme-color="#6234AC" href="blog.html" class="category">
                                                    {{ $category->name }}</a>
                                            @endif
                                        @endforeach
                                        <h3 class="box-title-22">
                                            <a class="hover-line" href="blog-details.html">{{ $economic->title }}</a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="author.html">
                                                <i class="far fa-user"></i>By - Tnews
                                            </a>
                                            <a href="#">
                                                <i
                                                    class="fal fa-calendar-days"></i>{{ $economic->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                        <a href="blog-details.html" class="th-btn style2">Ler mais<i
                                                class="fas fa-arrow-up-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- Fim da sessão de Economia e Negocio --}}
                </div>
                <div class="col-xl-4 mt-35 mt-xl-0 sidebar-wrap mb-10">
                    <div class="sidebar-area">
                        {{-- Publicidade --}}
                        @foreach ($ads as $ad)
                            <div class="widget mb-40 img-ads">
                                <div class="widget-ads">
                                    <a href="{{ $ad->link }}" target="_blank" class="ads-style1">
                                        <img class="w-100 light-img" src="{{ asset('img/ads/' . $ad->image) }}"
                                            alt="ads">
                                        <img class="w-100 dark-img" src="{{ asset('img/ads/' . $ad->image) }}"
                                            alt="ads">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        {{-- Fim da Publicidade --}}

                        {{-- Sessão de Sociedade --}}
                        <div class="widget">
                            <h2 class="sec-title fs-20 has-line">Sociedade</h2>
                            <div class="row gy-4">
                                @foreach ($Society as $society)
                                    <div class="col-xl-12 col-md-6">
                                        <div class="blog-style2">
                                            <div class="blog-img img-big">
                                                <img src="{{ asset('img/news/' . $society->image) }}" alt="blog image">
                                            </div>
                                            <div class="blog-content">
                                                @foreach ($categories as $category)
                                                    @if ($category->id == $society->category_id)
                                                        <a data-theme-color="#6234AC" href="blog.html" class="category">
                                                            {{ $category->name }}</a>
                                                    @endif
                                                @endforeach
                                                <h3 class="box-title-20">
                                                    <a class="hover-line"
                                                        href="blog-details.html">{{ Str::limit($society->title, 50) }}</a>
                                                </h3>
                                                <div class="blog-meta">
                                                    <a href="blog.html">
                                                        <i
                                                            class="fal fa-calendar-days"></i>{{ $society->updated_at->format('d M, Y') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- Fim da sessão de Sociedade --}}
                        {{-- Subscrição --}}
                        <div class="widget newsletter-widget3"
                            data-bg-src="{{ url('site/assets/img/bg/line_bg_1.png') }}">
                            <div class="mb-4">
                                <img src="{{ url('site/assets/img/bg/newsletter_img_2.png') }}" alt="Icon">
                            </div>
                            <h3 class="box-title-24 mb-20">Subscreve Agora</h3>
                            <form class="newsletter-form">
                                <input class="form-control" type="email" placeholder="Digite o E-mail" required>
                                <button type="submit" class="icon-btn">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                        {{-- Fim de Subscrição --}}
                    </div>
                </div>
            </div>
            {{-- =================== Fim de Sessão de Tecnologia, Economia e Sociedade ================== --}}
        </div>
    </section>
    {{-- =================== Fim de Sessão de Tecnologia, Economia e Sociedade ================== --}}
@endsection
