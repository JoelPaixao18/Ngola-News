<header class="th-header header-layout5 dark-theme">
    <div class="sticky-wrapper">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-2 d-none d-lg-inline-block">
                    <div class="header-logo">
                        <a href="/">
                            <img src="assets/img/logoNgolaLong1.png" alt="Tnews">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header-top">
                        <div class="row align-items-center">
                            <div class="col-xl-9">
                                <div class="news-area">
                                    <div class="title">Últimas Notícias :</div>
                                    <div class="news-wrap">
                                        <div class="row slick-marquee">
                                            @foreach ($breaknews as $topic)
                                                <div class="col-auto">
                                                    <a href="{{ route('site.newsView', ['news' => $topic->id]) }}"
                                                        class="breaking-news">{{ $topic->title }}</a>
                                                </div>
                                            @endforeach
                                            {{--  <div class="col-auto">
                                                <a href="blog-details.html" class="breaking-news">From health to
                                                    fashion, lifestyle news curated.</a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="blog-details.html" class="breaking-news">Sun, sand, and luxury
                                                    at our resort</a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="blog-details.html" class="breaking-news">Relaxation redefined,
                                                    your beach resort sanctuary.</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 text-end d-none d-xl-block">
                                <div class="social-links">
                                    <span class="social-title">Follow Us :</span>
                                    <a href="https://www.facebook.com">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.instagram.com">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto d-none d-xl-block">
                                <div class="toggle-icon">
                                    <a href="#" class="simple-icon sideMenuToggler">
                                        <i class="far fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto d-lg-none d-block">
                                <div class="header-logo">
                                    <a href="/">
                                        <img class="light-img" src="assets/img/logoNgolaLong1.png" alt="Tnews">
                                    </a>
                                    <a href="/">
                                        <img class="dark-img" src="assets/img/logo-white.svg" alt="Tnews">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li>
                                            <a href="/">Home</a>{{--
                          <ul class="sub-menu">
                            <li><a href="/">Home Newspaper</a></li>
                            <li><a href="home-magazine.html">Home Magazine</a></li>
                            <li><a href="home-sports.html">Home Sports</a></li>
                            <li><a href="home-movie.html">Home Movie</a></li>
                            <li><a href="home-gadget.html">Home Gadget</a></li>
                          </ul> --}}
                                        </li>
                                        <li><a href="/site/about">Sobre</a></li>
                                        <li><a href="{{ route('site.policy') }}">Política</a></li>
                                        <li><a href="#">Artes & Cultura</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Desportos</a>
                                            <ul class="sub-menu">
                                                <li><a href="https://www.abola.pt/internacional" target="_blank"
                                                        rel="noopener noreferrer">Desporto
                                                        Internacional</a></li>
                                                <li><a href="https://www.jornaldeangola.ao/noticias/6/desporto"
                                                        target="_blank" rel="noopener noreferrer">Desporto Nacional</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Multimédia</a>
                                            <ul class="sub-menu">
                                                {{-- <li><a href="/site/category">Todas</a></li> --}}
                                                <li><a href="/site/publication">Publicação</a></li>
                                                <li><a href="/site/videos">Vídeos</a></li>
                                                <li><a href="/site/galery">Galeria</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li class="menu-item-has-children">
                          <a href="#">Pages</a>
                          <ul class="sub-menu">
                            <li class="menu-item-has-children">
                              <a href="#">Shop</a>
                              <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                              </ul>
                            </li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="author.html">Author</a></li>
                            <li><a href="error.html">Error Page</a></li>
                          </ul>
                          <a href="#">Blog</a>
                          <ul class="sub-menu">
                            <li><a href="#">Blog Standard</a></li>
                            <li><a href="#">Blog Masonary</a></li>
                            <li><a href="#">Blog List</a></li>
                            <li><a href="#">Blog Details</a></li>
                            <li><a href="#">Blog Details Video</a></li>
                            <li><a href="#">Blog Details Audio</a></li>
                            <li><a href="#">Blog Details Nosidebar</a></li>
                            <li><a href="#">Blog Details Full Image</a></li>
                          </ul>
                        </li> --}}
                                        {{-- <li><a href="/site/contact">Contactos</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto">
                                <div class="header-button">
                                    <button type="button" class="simple-icon searchBoxToggler">
                                        <i class="far fa-search"></i>
                                    </button>{{--
                      <button type="button" class="simple-icon d-none d-lg-block cartToggler">
                        <i class="far fa-cart-shopping"></i>
                        <span class="badge">5</span> --}}
                                    </button>
                                    <a href="contact.html" class="th-btn style3">Contacte-nos</a>
                                    <button type="button" class="th-menu-toggle d-block d-lg-none">
                                        <i class="far fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
