<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Listar todas as notícias
    public function index()
    {
        $news = News::with('category')->latest()->paginate(10);
        return view('news.index', compact('news'));
    }

    // Mostrar o formulário de criação
    public function create()
    {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }

    // Armazenar uma nova notícia
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:news,slug',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('news_images', 'public');
            $validated['imagem'] = $path;
        }

        News::create($validated);

        return redirect()->route('news.index')->with('success', 'Notícia criada com sucesso!');
    }

    // Mostrar detalhes de uma notícia
    public function show($id)
    {
        $news = News::with('category')->findOrFail($id);
        return view('news.show', compact('news'));
    }

    // Mostrar o formulário de edição
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all();
        return view('news.edit', compact('news', 'categories'));
    }

    // Atualizar uma notícia existente
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:news,slug,' . $news->id,
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('news_images', 'public');
            $validated['imagem'] = $path;
        }

        $news->update($validated);

        return redirect()->route('news.index')->with('success', 'Notícia atualizada com sucesso!');
    }

    // Eliminar uma notícia
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Notícia eliminada com sucesso!');
    }
}