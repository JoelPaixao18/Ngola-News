<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::orderByDesc('id')->get();
        return view('admin.news.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories1 = Category::where('type', 'Notícias')->get();
        $categories1 = Category::where('type', 'Notícia')->get();
        $categories = $categories1->merge($categories1);
        return view('admin.news.newsCreate.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'status' => 'required|in:draft,published,filed',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date|after_or_equal:today',
            'detach' => 'required|in:normal,destaque,urgente',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'status.required' => 'Obrigatório selecionar um status.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'image.image' => 'O arquivo deve ser uma imagem.',
            'image.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'image.max' => 'A imagem não pode ter mais de 2MB.',
            'date.required' => 'A data é obrigatória.',
            'date.date' => 'Informe uma data válida.',
            'date.after_or_equal' => 'A data não pode ser anterior à data atual.',
            'detach.required' => 'O campo destaque é obrigatório.',
            'detach.in' => 'O valor do destaque é inválido.',
            'category_id.required' => 'A categoria é obrigatória.',
            'category_id.exists' => 'A categoria selecionada é inválida.',
        ]);

        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
            $data['image'] = $imagePath;
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'Notícia criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Notícia!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //

        return view('admin.news.newsViews.index', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
        $categories = Category::all(); // Or any other query to fetch categories
        return view('admin.news.newsEdit.index', [
            'news' => $news,
            'categories' => $categories // Pass categories to the view
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'status' => 'required|in:draft,published,filed',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date|after_or_equal:today',
            'detach' => 'required|in:normal,destaque,urgente',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'status.required' => 'Obrigatório selecionar um status.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'image.image' => 'O arquivo deve ser uma imagem.',
            'image.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'image.max' => 'A imagem não pode ter mais de 2MB.',
            'date.required' => 'A data é obrigatória.',
            'date.date' => 'Informe uma data válida.',
            'date.after_or_equal' => 'A data não pode ser anterior à data atual.',
            'detach.required' => 'O campo destaque é obrigatório.',
            'detach.in' => 'O valor do destaque é inválido.',
            'category_id.required' => 'A categoria é obrigatória.',
            'category_id.exists' => 'A categoria selecionada é inválida.',
        ]);

        $data = $request->except('_token', '_method', 'image');

        // Atualiza o slug baseado no título se necessário
        if ($request->has('title') && $request->title !== $news->title) {
            $data['slug'] = Str::slug($request->title);
        }

        // Tratamento da imagem
        if ($request->hasFile('image')) {
            // Remove a imagem antiga se existir
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }

            $imagePath = $request->file('image')->store('news_images', 'public');
            $data['image'] = $imagePath;
        } elseif ($request->has('remove_image')) {
            // Se for para remover a imagem
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $data['image'] = null;
        }

        // Atualiza todos os campos de uma vez
        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'Notícia atualizada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Notícia!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('alert', [
                'type' => 'success',
                'message' => 'Notícia excluída com sucesso!'
            ]);
    }
}
