<div class="row">

    {{-- Comentários --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Notícias Publicadas</label>
        <select class="form-control" name="news_id" data-select2-selector="news">
            <option value="">-- Selecione uma notícia --</option>
            @foreach ($news as $news)
                <option value="{{ $news->id }}"
                    {{ old('category_id', $comment->news_id ?? '') == $news->id ? 'selected' : '' }}>
                    {{ $news->title }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Texto do Comentário --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Texto do Comentário</label>
        <input type="text" name="text_comment" class="form-control"
            value="{{ old('text_comment') ?? $comment->text_comment }}" placeholder="Ex: Será que é verdade...">
    </div>

    {{-- Slug --}}
    {{-- <div class="col-lg-4 mb-4">
                                        <label class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ old('slug') }}" placeholder="ex: politica, desporto...">
                                    </div> --}}

    {{-- Autor do Comentário --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Autor do Comentário</label>
        <input type="text" name="author_comment" class="form-control"
            value="{{ old('author_comment') ?? $comment->author_comment }}" placeholder="Ex: Ana Maria...">
    </div>

    {{-- Status --}}
    {{--  <div class="col-lg-4 mb-4">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" name="status" data-select2-selector="status">
                                            <option value="" disabled selected>Selecione o status</option>
                                            <option value="active" data-bg="bg-success"> Ativo</option>
                                            <option value="inactive" data-bg="bg-danger"> Inativo</option>
                                        </select>
                                    </div> --}}

    {{-- Date --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Data de Publicação</label>
        <input type="date" name="date" class="form-control"
            value="{{ old('date', $comment->date ?? date('Y-m-d')) }}">
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
