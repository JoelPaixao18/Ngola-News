<div class="col-lg-12">
    <div class="card stretch stretch-full">
        <div class="card-body lead-status">
            <div class="mb-5 d-flex align-items-center justify-content-between">
                <h5 class="fw-bold mb-0 me-4">
                    <span class="d-block mb-2">Informações do utilizador:</span>
                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">Typically
                        refers to adding a new potential customer or sales prospect</span>
                </h5>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <label class="form-label">Nome: </label>
                    <input type="text" class="form-control" name="name" id="name"
                        value="{{ old('name', $user->name ?? '')}}">
                </div>
                <div class="col-lg-4 mb-4">
                    <label class="form-label">E-Mail: </label>
                    <input type="text" class="form-control" name="email" id="email"
                        value="{{ old('email',$user->email ?? '') }}">
                </div>
                <div class="col-lg-4 mb-4">
                    <label class="form-label">Password: </label>
                    <input type="password" class="form-control" name="password" id="password"
                        value="{{ old('password',$user->password ?? '') }}">
                </div>
                {{-- <div class="col-lg-4 mb-4">
                                        <label class="form-label">Confirmar Password</label>
                                        <input type="password" name="passwordConfirm" class="form-control"
                                            value="{{ old('passwordConfirm') }}" placeholder="Digite a passwordConfirm...">
                                    </div> --}}
                <div class="col-lg-4 mb-4">
                    <label class="form-label">Nivel de Acesso</label>
                    <select class="form-control" name="role" id="role">
                        <option value="{{ old('role', $user->role ?? '') }}" selected>{{ 'Selecione' ?? $user->role }}</option>
                        <option value="Assinate">Assinate</option>
                        <option value="Jornalista">Jornalista</option>
                        <option value="Editor">Editor</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="col-lg-4 mb-4">
                    <label class="form-label">Foto de Perfil</label>
                    <input type="file" name="image" class="form-control">
                    @isset($user)
                    <small class="text-muted"><img src="{{ asset('img/users/' . $user->image) }}" width="50"
                            height="50" alt="Foto de {{ $user->name }}"></small>
                    @endif
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-danger"> Salvar
                        <i class="feather-save ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
