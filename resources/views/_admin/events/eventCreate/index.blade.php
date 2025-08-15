@extends('_admin.layout.main')
@section('title', 'Ngola News - Criar Evento')
@section('content-eventCreate')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Evento</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Criar</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <div class="dropdown filter-dropdown">
                            {{--  <a class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-filter me-2"></i>
                                <span>Filter</span>
                            </a> --}}
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Role"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Role">Role</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Team"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Team">Team</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Email"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Member"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Member">Member</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Recommendation"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer"
                                            for="Recommendation">Recommendation</label>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-plus me-3"></i>
                                    <span>Create New</span>
                                </a>
                                {{--  <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-filter me-3"></i>
                                    <span>Manage Filter</span>
                                </a> --}}
                            </div>
                        </div>
                        <a href="{{ route('admin.event.index') }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Visualizar</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <!-- __________________________________________________
                                                                             Criando Formulario Event Create
                                                                 _______________________________________________________________-->
                <!-- [ Main Content ] start -->
                <div class="main-content">
                    <form id="eventForm" action="{{ route('admin.event.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card stretch stretch-full">
                                    <div class="card-body lead-status">
                                        <div class="mb-5 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Criando Eventos :</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">
                                                    Insira as informações do seu próximo evento aqui.
                                                </span>
                                            </h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Categoria</label>
                                                <select class="form-select form-control" name="categoryId"
                                                    data-select2-selector="status">
                                                        <option value="" selected>-- Selecione uma
                                                            Categoria --</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" data-bg="bg-primary">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Estado:</label>
                                                <select class="form-select form-control" name="status"
                                                    data-select2-selector="visibility">
                                                    <option value="" selected>-- Selecione um Estado --</option>
                                                    <option value="1">Ativo</option>
                                                    <option value="0">Desativo</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">localização:</label>
                                                <select class="form-select form-control" name="location"
                                                    data-select2-selector="visibility">
                                                    <option value="" selected>-- Selecione um Estado --</option>
                                                    @foreach ($locations as $location)
                                                        <option value="{{ $location->id }}" data-bg="bg-primary">
                                                            {{ $location->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Data do Evento</label>
                                                <input type="date" class="form-control" name="eventDate"
                                                    value="{{ old('eventDate', \Carbon\Carbon::now()->format('Y-m-d')) }}"
                                                    id="date">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="fullnameInput" class="form-label">Título: </label>
                                                <input type="text" class="form-control" value="{{ old('title') }}"
                                                    name="title" id="fullnameInput" placeholder="Título... ">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="fullnameInput" class="form-label">Subtítulo: </label>
                                                <input type="text" class="form-control" name="subtitle"
                                                    value="{{ old('subtitle') }}" id="fullnameInput"
                                                    placeholder="Subtítulo... ">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="mailInput" class="form-label">Imagem de Capa: </label>
                                                <input type="file" class="form-control" name="image" id="mailInput"
                                                    placeholder="Carregue a imagem...">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="autorInput" class="form-label">Autor: </label>
                                                <select class="form-control" name="authorId"
                                                    data-select2-selector="country">
                                                    @foreach ($authors as $author)
                                                        <option value="{{ $author->id }}" data-bg="bg-primary">
                                                            {{ $author->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <label for="descriptionInput" class="form-label">Descrição: </label>
                                                <textarea class="form-control" id="descriptionInput" name="description" cols="30" rows="5"
                                                    placeholder="Description">{{ old('description') }}</textarea>
                                            </div>
                                            <div class="col-lg-6 mb-4"> <button type="submit" class="btn btn-danger">
                                                    Salvar
                                                    <i class="feather-save ms-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

                </form>

            </div>
            <!-- [ Main Content ] end -->
        </div>

        <!-- [ Main Content ] end -->
    </div>
@endsection
