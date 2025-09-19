@extends('layouts._site.main')
@section('title', 'Assessorarte- Notícia Detalhada')
@section('content')


    <div class="breadcumb-wrapper">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Informações Detalhadas</li>
            </ul>
        </div>
    </div>
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12"><a data-theme-color="#019D9E" href="#"
                        class="category">{{ $news->category->name }}</a>
                    <h2 class="blog-title">{{ $news->title }}.</h2>
                    <h6>{{ $news->subtitle }}</h6>
                    <div class="blog-meta"><a class="author" href="#"><i class="far fa-user"></i>By -
                            Tnews</a> <a href="#"><i
                                class="fal fa-calendar-days"></i>{{ $news->updated_at->format('d M, Y') }}</a> <a
                            href="#"><i class="far fa-comments"></i>Comments (3)</a> {{-- <span><i
                                class="far fa-book-open"></i>5 Mins Read</span> --}}</div>
                    <div class="blog-img mb-40 img-view">
                        <img src="{{ asset('/img/news/' . $news->image) }}" alt="Blog Image" class="fixed-img">
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-8">
                    <div class="th-blog blog-single">
                        <div class="blog-content-wrap">
                            <div class="share-links-wrap">
                                <div class="share-links"><span class="share-links-title">Pesquisar Posts:</span>
                                    <div class="multi-social"><a href="../../../../www.facebook.com/index.html"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a> <a
                                            href="../../../../www.twitter.com/index.html" target="_blank"><i
                                                class="fab fa-twitter"></i></a> <a
                                            href="../../../../www.linkedin.com/index.html" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a> <a href="https://pinterest.com/"
                                            target="_blank"><i class="fab fa-pinterest-p"></i></a> <a
                                            href="https://instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a></div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-info-wrap"><button class="blog-info print_btn">Imprimir :
                                        <i class="fas fa-print"></i></button> {{-- <a class="blog-info" href="mailto:">Email
                                        : <i class="fas fa-envelope"></i> </a><button class="blog-info ms-sm-auto">15k
                                        <i class="fas fa-thumbs-up"></i></button> <span class="blog-info">126k <i
                                            class="fas fa-eye"></i></span> <span class="blog-info">12k <i
                                            class="fas fa-share-nodes"></i></span> --}}
                                </div>
                                <div class="content">
                                    {!! $news->description !!}
                                </div>
                                <div class="blog-tag">
                                    <h6 class="title">Etiqueta relacionada :</h6>
                                    <div class="tagcloud">
                                        @foreach ($tags1 as $tag)
                                            <a href="blog.html">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="blog-navigation">
                        <div class="nav-btn prev">
                            <div class="img"><img src="assets/img/blog/blog-nav-1.jpg" alt="blog img" class="nav-img">
                            </div>
                            <div class="media-body">
                                <h5 class="title"><a class="hover-line" href="blog-details.html">Game on!
                                        Embrace the
                                        spirit of sportsmanship</a></h5><a href="blog-details.html" class="nav-text"><i
                                        class="fas fa-arrow-left me-2"></i>Prev</a>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="nav-btn next">
                            <div class="media-body">
                                <h5 class="title"><a class="hover-line" href="blog-details.html">Push your
                                        limits,
                                        redefine what's possible</a></h5><a href="blog-details.html" class="nav-text">Next<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="img"><img src="assets/img/blog/blog-nav-2.jpg" alt="blog img" class="nav-img">
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="auhtor-img"><img src="assets/img/blog/blog-author.jpg" alt="Blog Author Image">
                        </div>
                        <div class="media-body">
                            <div class="author-top">
                                <div>
                                    <h3 class="author-name"><a class="text-inherit" href="team-details.html">Ronald
                                            Richards</a></h3><span class="author-desig">Founder & CEO</span>
                                </div>
                                <div class="social-links"><a href="../../../../www.facebook.com/index.html"
                                        target="_blank"><i class="fab fa-facebook-f"></i></a> <a
                                        href="../../../../www.twitter.com/index.html" target="_blank"><i
                                            class="fab fa-twitter"></i></a> <a
                                        href="../../../../www.linkedin.com/index.html" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a> <a href="https://instagram.com/"
                                        target="_blank"><i class="fab fa-instagram"></i></a></div>
                            </div>
                            <p class="author-text">Adventurer and passionate travel blogger. With a backpack full of
                                stories and a camera in hand, she takes her readers on exhilarating journeys around the
                                world.</p>
                        </div>
                    </div> --}}
                    {{-- Comentários --}}
                    <div class="th-comments-wrap">
                        <h2 class="blog-inner-title h3">
                            Comentários {{-- ({{ $news->comments->count() }}) --}}
                        </h2>

                        <ul class="comment-list">
                            @foreach ($news->comments->where('parent_id', null) as $comment)
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="{{ url('img/users/' . $comment->user->image) }}" alt="Foto do Autor">
                                        </div>
                                        <div class="comment-content">
                                            <span class="commented-on">
                                                <i class="fas fa-calendar-alt"></i>
                                                {{ $comment->created_at->format('d M, Y') }}
                                            </span>
                                            <h3 class="name">{{ $comment->user->name }}</h3>
                                            <p class="text">{{ $comment->text_comment }}</p>

                                            <!-- Botão de responder -->
                                            @auth
                                                <form action="{{ route('admin.comment.store', $news->id) }}" method="POST"
                                                    class="mt-2">
                                                    @csrf
                                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                    <textarea name="text_comment" class="form-control mb-2" rows="2" placeholder="Responder..." required></textarea>
                                                    <button type="submit" class="btn btn-sm btn-secondary">Responder</button>
                                                </form>
                                            @endauth
                                        </div>
                                    </div>

                                    <!-- Respostas -->
                                    @if ($comment->replies->count())
                                        <ul class="children">
                                            @foreach ($comment->replies as $reply)
                                                <li class="th-comment-item">
                                                    <div class="th-post-comment">
                                                        <div class="comment-avater">
                                                            <img src="{{ url('img/users/' . $reply->user->image) }}"
                                                                alt="Foto do Autor">
                                                        </div>
                                                        <div class="comment-content">
                                                            <span class="commented-on">
                                                                <i class="fas fa-calendar-alt"></i>
                                                                {{ $reply->created_at->format('d M, Y') }}
                                                            </span>
                                                            <h3 class="name">{{ $reply->user->name }}</h3>
                                                            <p class="text">{{ $reply->text_comment }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>

                    </div>
                    {{-- Fim de Comentários --}}

                    {{-- form de Comentários --}}
                    {{-- <div class="th-comment-form">
                        <div class="form-title">
                            <h3 class="blog-inner-title mb-2">Deixe um comentário</h3>
                            <p class="form-text">Your email address will not be published. Required fields are marked *
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group"><input type="text" placeholder="Seu Nome*"
                                    class="form-control"> <i class="far fa-user"></i></div>
                            <div class="col-md-6 form-group"><input type="text" placeholder="Seu Email*"
                                    class="form-control"> <i class="far fa-envelope"></i></div>
                            <div class="col-12 form-group"><input type="text" placeholder="Website"
                                    class="form-control"> <i class="far fa-globe"></i></div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Escreva um comentário*" class="form-control"></textarea> <i class="far fa-pencil"></i>
                            </div>
                            <div class="col-12 form-group mb-0"><button class="th-btn">Poste o Comentário</button></div>
                        </div>
                    </div> --}}
                    {{-- Fim de form dos Comentários --}}

                    {{-- Postes Relacionados a categoria --}}
                    <div class="related-post-wrapper pt-30 mb-30">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="sec-title has-line">Postagem relacionada</h2>
                            </div>
                            <div class="col-auto">
                                <div class="sec-btn">
                                    <div class="icon-box">
                                        <button data-slick-prev="#related-post-slide" class="slick-arrow default">
                                            <i class="far fa-arrow-left"></i>
                                        </button>
                                        <button data-slick-next="#related-post-slide" class="slick-arrow default">
                                            <i class="far fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row slider-shadow th-carousel" id="related-post-slide" data-slide-show="3"
                            data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="2">

                            @forelse ($Related as $related)
                                <div class="col-sm-6 col-xl-4">
                                    <div class="blog-style1">
                                        <div class="blog-img">
                                            <img src="{{ url('img/news/' . $related->image) }}" alt="blog image">
                                            <a data-theme-color="#00D084"
                                                href="{{ route('site.newsView', $related->id) }}" class="category">
                                                {{ $related->category->name }}
                                            </a>
                                        </div>
                                        <h3 class="box-title-22">
                                            <a class="hover-line" href="{{ route('site.newsView', $related->id) }}">
                                                {{ Str::limit($related->title, 30, '...') }}
                                            </a>
                                        </h3>
                                        <div class="blog-meta">
                                            <a href="#"><i class="far fa-user"></i>By - Tnews</a>
                                            <a href="#"><i class="fal fa-calendar-days"></i>
                                                {{ $related->updated_at->format('d M, Y') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center my-5">
                                    <p class="alert alert-warning fs-5 py-4 px-5">
                                        Nenhuma postagem relacionada.
                                    </p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    {{-- Fim de Postes Relacionados a categoria --}}

                </div>
                {{-- Sessão de Postes Recentes & Tags Populatres --}}
                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">
                        {{-- <div class="widget widget_search">
                            <form class="search-form"><input type="text" placeholder="Enter Keyword"> <button
                                    type="submit"><i class="far fa-search"></i></button></form>
                        </div> --}}
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
                        <br>
                        @foreach ($ads as $ad)
                            <div class="widget">
                                <div class="widget-ads"><a href="{{ $ad->link }}"><img class="w-100"
                                            src="{{ url('img/ads/' . $ad->image) }}" alt="ads"></a></div>
                            </div>
                        @endforeach
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href="blog.html">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
                {{-- Fim Sessão de Postes Recentes & Tags Populatres --}}
            </div>
        </div>
    </section>

@endsection
