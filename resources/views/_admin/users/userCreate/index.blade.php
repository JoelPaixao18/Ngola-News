@extends('_admin.layout.main')

<<<<<<< HEAD:resources/views/_admin/users/userCreate/index.blade.php
@section('title', 'Ngola News - Criar Utilizador')
=======
@section('title', 'Assessorarte- Criar Autor')
>>>>>>> joel:resources/views/_admin/authors/authorCreate/index.blade.php

@section('content')
    <!-- [ Craete Form ] -->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Utilizador</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Create</li>
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
                        {{-- <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                            <i class="feather-layers me-2"></i>
                            <span>Save as Draft</span>
                        </a> --}}
                        <a href="{{ route('admin.user.index') }}" class="btn btn-danger">
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
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body lead-status">
                            <div class="mb-5 d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 me-4">
                                    <span class="d-block mb-2">Informações do Utilizador:</span>
                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">Normalmente se refere a
                                        adicionar um novo cliente potencial ou jornalista.</span>
                                </h5>
                                <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-light-brand">Listar
                                    Utilizador</a>
                            </div>
                            <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="row">

                                    {{-- Utilizador --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Nome </label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Digite o nome completo...">
                                    </div>

                                    {{-- E-mail --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email') }}" placeholder="Digite o seu e-mail...">
                                    </div>

                                    {{-- Password --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            value="{{ old('password') }}" placeholder="Digite a password...">
                                    </div>
                                    {{-- Password Confirm--}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Confirmar Password</label>
                                        <input type="password" name="password" class="form-control"
                                            value="{{ old('password') }}" placeholder="Digite a password...">
                                    </div>

                                    {{-- Image --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Foto de Perfil</label>
                                        <input type="file" name="image" class="form-control">
                                        <small class="text-muted">Formatos suportados: jpg, jpeg, png, gif</small>
                                    </div>

                                     {{-- Nivel de acesso --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Nivel de Acesso</label>
                                       <select name="access_level" id="access_level" class="form-control">
                                        <option value="" selected>--Selecion um nivel de acesso--</option>
                                        <option value="Assinate">Assinate</option>
                                        <option value="Jornalista">Jornalista</option>
                                        <option value="Editor">Editor</option>
                                        <option value="Admin">Admin</option>
                                       </select>
                                    </div>

                                    {{-- Biography --}}
                                    {{-- <div class="col-12 mb-4">
                                        <label class="form-label">Biográfia</label>
                                        <textarea name="biography" class="form-control" rows="4" placeholder="Escreve a sua biográfia...">{{ old('biography') }}</textarea>
                                    </div> --}}

                                    {{-- Botão de Enviar --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-danger"> Salvar
                                            <i class="feather-save ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
