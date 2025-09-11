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
                            href="#"><i class="far fa-comments"></i>Comments (3)</a> <span><i
                                class="far fa-book-open"></i>5 Mins Read</span></div>
                    <div class="blog-img mb-40"><img src="{{ asset('/img/news/' . $news->image) }}" alt="Blog Image"
                            class="fixed-img">
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
                                <div class="blog-info-wrap"><button class="blog-info print_btn">Imprimir : <i
                                            class="fas fa-print"></i></button> <a class="blog-info" href="mailto:">Email
                                        : <i class="fas fa-envelope"></i> </a><button class="blog-info ms-sm-auto">15k
                                        <i class="fas fa-thumbs-up"></i></button> <span class="blog-info">126k <i
                                            class="fas fa-eye"></i></span> <span class="blog-info">12k <i
                                            class="fas fa-share-nodes"></i></span></div>
                                <div class="content">
                                    {!! $news->description !!}
                                </div>
                                <div class="blog-tag">
                                    <h6 class="title">Etiqueta relacionada :</h6>
                                    <div class="tagcloud"><a href="blog.html">Sports</a> <a
                                            href="{{ route('site.policy') }}">Políticas</a>
                                        <a href="blog.html">Business</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-navigation">
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
                    </div>
                    <div class="th-comments-wrap">
                        <h2 class="blog-inner-title h3">Comentários (03)</h2>
                        <ul class="comment-list">
                            <li class="th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater"><img src="assets/img/blog/comment-author-1.jpg"
                                            alt="Comment Author"></div>
                                    <div class="comment-content"><span class="commented-on"><i
                                                class="fas fa-calendar-alt"></i>14 Março, 2023</span>
                                        <h3 class="name">Brooklyn Simmons</h3>
                                        <p class="text">Your sport blog is simply fantastic! The in-depth analysis,
                                            engaging writing style, and up-to-date coverage of various sports newss
                                            make it a must-visit for any sports enthusiast.</p>
                                        <div class="reply_and_edit"><a href="blog-details.html" class="reply-btn"><i
                                                    class="fas fa-reply"></i>Responder</a></div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="th-comment-item">
                                        <div class="th-post-comment">
                                            <div class="comment-avater"><img src="assets/img/blog/comment-author-2.jpg"
                                                    alt="Comment Author"></div>
                                            <div class="comment-content"><span class="commented-on"><i
                                                        class="fas fa-calendar-alt"></i>15 Março, 2023</span>
                                                <h3 class="name">Marvin McKinney</h3>
                                                <p class="text">Whether it's breaking news, expert opinions, or
                                                    inspiring athlete profiles, your blog delivers a winning combination
                                                    of excitement and information that keeps.</p>
                                                <div class="reply_and_edit"><a href="blog-details.html"
                                                        class="reply-btn"><i class="fas fa-reply"></i>Responder</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater"><img src="assets/img/blog/comment-author-3.jpg"
                                            alt="Comment Author"></div>
                                    <div class="comment-content"><span class="commented-on"><i
                                                class="fas fa-calendar-alt"></i>16 Março, 2023</span>
                                        <h3 class="name">Ronald Richards</h3>
                                        <p class="text">The way you seamlessly blend statistical insights with
                                            compelling storytelling creates an immersive and captivating reading
                                            experience. Whether it's the latest match updates, behind-the-scenes
                                            glimpses.</p>
                                        <div class="reply_and_edit"><a href="blog-details.html" class="reply-btn"><i
                                                    class="fas fa-reply"></i>Responder</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="th-comment-form">
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
                    </div>
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
                                                href="{{ route('site.newsView', $related->category->id) }}"
                                                class="category">
                                                {{ $related->category->name }}
                                            </a>
                                        </div>
                                        <h3 class="box-title-22">
                                            <a class="hover-line" href="{{ route('site.newsView', $related->id) }}">
                                                {{ Str::limit($related->title, 50) }}
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

                </div>
                <div class="col-xxl-3 col-lg-4 sidebar-wrap">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form"><input type="text" placeholder="Enter Keyword"> <button
                                    type="submit"><i class="far fa-search"></i></button></form>
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

@endsection
