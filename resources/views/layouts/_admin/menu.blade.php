<!--! ================================================================ !-->
<!--! [Start] Navigation Manu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/admin/dashboard" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ url('assets/images/3-Photoroom.png') }}" alt="SOS" class="logo logo-lg"
                    style="heigth:10rem; width:12rem;">
                <img src="{{ url('assets/images/lillogo.png') }}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Menu</label>
                </li>
                @can('is-admin')
                {{-- Menu Dashboard --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Visão geral</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/admin/dashboard">Gestão de
                                contatos</a>
                        </li>
                        {{-- <li class="nxl-item"><a class="nxl-link" href="/analytics">Analytics</a></li> --}}
                    </ul>
                </li>
                {{-- Menu users --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span>
                        <span class="nxl-mtext">Utilizador</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.index') }}">Lista de
                                Utilizadores</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.create') }}">Novo
                                Utilizador</a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('is-editor')
                {{-- Menu Types Categories --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-list"></i></span>
                        <span class="nxl-mtext">Tipos de Categorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.typeCategories.index') }}">Lista
                                de Tipos de Categorias</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.typeCategory.create') }}">Novo
                                Tipo de Categoria</a></li>
                    </ul>
                </li>

                {{-- Menu Category --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                        <span class="nxl-mtext">Categorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link"
                                href="{{ route('admin.categories.index') }}">Categoria</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.category.create') }}">Criar
                                Categoria</a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Events --}}
                {{-- <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Eventos</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.event.index') }}">Lista de
                                Eventos </a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.event.create') }}">Novo
                                Evento</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                    </ul>
                </li> --}}
                {{-- Menu Tags --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-tag"></i></span>
                        <span class="nxl-mtext">Tags</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.tags.index') }}">Tag</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.tag.create') }}">Nova Tag</a>
                        </li>
                    </ul>
                </li>
                @endcan
                {{-- Menu News --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-send"></i></span>
                        <span class="nxl-mtext">Notícias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.news.index') }}">Lista de
                                Notícias</a></li>
                </li>
                <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.news.create') }}">Nova Notícia</a>
                </li>
            </ul>
            </li>

            {{-- Menu Comments --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-edit"></i></span>
                    <span class="nxl-mtext">Comentários</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link"
                            href="{{ route('admin.comments.index') }}">Comentários</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.comment.create') }}">Criar
                            Comentário</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu publications --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-archive"></i></span>
                    <span class="nxl-mtext">Publicações</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link"
                            href="{{ route('admin.publication.index') }}">Publicações</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.publication.create') }}">Criar
                            Publicação</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu videos --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-video"></i></span>
                    <span class="nxl-mtext">Videos</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.index') }}">Videos</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.video.create') }}">Criar
                            Vídeo</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu galery --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-image"></i></span>
                    <span class="nxl-mtext">Galeria</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.galery.index') }}">Galeria</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.galery.create') }}">Criar
                            Galeria</a></li>
                    <!-- <li class="nxl-item"><a class="nxl-link" href="/events/eventsTimesheets">Timesheets Report</a></li> -->
                </ul>
            </li>
            {{-- Menu Publicidade --}}
            <li class="nxl-item nxl-hasmenu">
                <a href="javascript:void(0);" class="nxl-link">
                    <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                    <span class="nxl-mtext">Publicidade</span><span class="nxl-arrow"><i
                            class="feather-chevron-right"></i></span>
                </a>
                <ul class="nxl-submenu">
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.ads.index') }}">Publicidade</a>
                    </li>
                    <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.ads.create') }}">Criar
                            Publicidade</a>
                    </li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
    </div>
</nav>
