<div class="row">
    {{-- Campo select para selecionar os Tipos de categoria --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Tipo de Categoria</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $typeCategory->name ?? '') }}"
            placeholder="Ex: Notícia, Eventos...">
    </div>

    {{-- Descrição - descrevendo sobre o que se trata --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição...">{{ old('description', $category->description ?? '') }}</textarea>
    </div>

    {{-- Botão de atualizar as alterações --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Atualizar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
