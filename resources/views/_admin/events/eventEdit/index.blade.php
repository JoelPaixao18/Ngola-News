@extends('_admin.layout.main')
@section('title', 'Ngola News - Editar Evento')
@section('content-eventEdit')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Event</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Edit</li>
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
                            <a class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-filter me-2"></i>
                                <span>Filter</span>
                            </a>
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
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-filter me-3"></i>
                                    <span>Manage Filter</span>
                                </a>
                            </div>
                        </div>
                        <a href="{{ route('admin.event.index') }}" class="btn btn-danger">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>
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
                <!-- [ page-header ] end -->

                <!-- [ Main Content ] start -->
                <div class="main-content">
                    <form id="eventForm" action="{{ route('admin.event.update', ['event' => $event]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- como o <form> do html não recebe o metodo ptu por padrão, é necessário essa linha para o nosso arquivo routee entenda que udpdate é medtodo PUT --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card stretch stretch-full">
                                    <div class="card-body lead-status">
                                        <div class="mb-5 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Editando Evento :</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">Faça as
                                                    alterações necessárias das informações do evento</span>
                                            </h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Categoria</label>
                                                <select class="form-select form-control" name="category_id"
                                                    data-select2-selector="status">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" data-bg="bg-primary">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Status:</label>
                                                <select class="form-select form-control" ... name="status"
                                                    data-select2-selector="visibility">
                                                    <option value="1"
                                                        {{ $event->status == 'Ativo' ? 'selected' : '' }}>Ativo
                                                    </option>
                                                    <option value="0"
                                                        {{ $event->status == 'Desativo' ? 'selected' : '' }}>Desativo
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">localização:</label>
                                                <select class="form-select form-control" name="location"
                                                    data-select2-selector="visibility">
                                                    @foreach ($locations as $location)
                                                        <option value="{{ $location->id }}" data-bg="bg-primary">
                                                            {{ $location->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="form-label">Data de Eventos</label>
                                                <input type="date" class="form-control" name="event_date"
                                                    value="{{ $event->event_date }}" id="date">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="fullnameInput" class="fw-semibold">Title: </label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('title', $event->title ?? '') }}" name="title"
                                                    id="fullnameInput" placeholder="Title... ">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="fullnameInput" class="fw-semibold">Subtitle: </label>
                                                <input type="text" class="form-control" name="subtitle"
                                                    value="{{ old('subtitle', $event->subtitle ?? '') }}"
                                                    id="fullnameInput" placeholder="Title... ">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="mailInput" class="fw-semibold">Cover image: </label>
                                                <input type="file" class="form-control" name="image" id="mailInput"
                                                    placeholder="Upload image...">
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="{{ asset('img/events/' . $event->image) }}" alt=""
                                                    height="60" width="60 ">
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="autorInput" class="fw-semibold">Autor: </label>
                                                <select class="form-control" name="author_id"
                                                    data-select2-selector="country">
                                                    @foreach ($authors as $author)
                                                        <option value="{{ $author->id }}" data-bg="bg-primary">
                                                            {{ $author->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <label for="descriptionInput" class="fw-semibold">Description: </label>
                                                <textarea class="form-control" id="descriptionInput" name="description" cols="30" rows="5">{{ old('description', $event->description) }}</textarea>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <button type="submit" class="btn btn-danger"> Salvar
                                                <i class="feather-save ms-2"></i>
                                            </button>
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
