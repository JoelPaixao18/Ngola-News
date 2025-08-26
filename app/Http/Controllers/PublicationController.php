<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Category;

class PublicationController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $publications = Publication::all();
        return view('_admin.publications.publication.index', compact('publications', 'categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('_admin.publications.publicationCreate.index', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validação básica
        $request->validate([
            'title' => 'required|string|max:1000',
            'date' => 'required|date|after_or_equal:today',
            'file' => 'required|exists:categories,id',
            'cover' => 'required|image|mimes:jpg,jpeg,png',
        ], [
            'title.required' => 'O título é obrigatório.',
            'file.required' => 'O arquivo é obrigatório.',
            'date.required' => 'A data é obrigatória.',
            'cover.required' => 'A capa é obrigatória.',
            'cover.image' => 'A capa deve ser um arquivo de imagem válido.',
            'cover.mimes' => 'A capa deve ser do tipo: jpg, jpeg, png.',
        ]);

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $image = $request->file('cover');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/publication'), $imageName);
        }

        // Criação do evento
        Publication::create([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $request->file,
            'cover' => $imageName,
           
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Evento criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Evento!');
    }

   
    public function show()
    {
    }

    public function edit()
    {
    }

    public function update(Request $request)
    {
    }

    public function destroy()
    {
    }

}