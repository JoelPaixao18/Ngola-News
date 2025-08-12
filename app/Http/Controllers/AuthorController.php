<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors = Author::orderByDesc('id')->get();

        return view('admin.authors.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.authors.authorCreate.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Author $author)
    {
        // Validação dos campos
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'biography' => 'nullable|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        // Upload da imagem
        $fotoName = null;
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $foto = $request->file('foto');
            $extension = $foto->extension();
            $fotoName = md5($foto->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $foto->move(public_path('img/authors'), $fotoName);
        }

        // Criação do autor
        $author = Author::create($validated);

        return redirect()->route('admin.author.index')->with('msg', 'author criado com sucesso!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
        return view('admin.authors.authorView.index', ['author' => $author ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
        return view('admin.authors.authorEdit.index', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
        // Validação
         $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'biography' => 'nullable|string',
            'foto' => 'sometimes|image|mimes:jpg,jpeg,png', // Alterado para 'sometimes'
        ]);


        // Processar fotom se for enviada
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            // Remover fotom antiga se existir
            if ($author->foto && file_exists(public_path('img/author/' . $author->foto))) {
                unlink(public_path('img/author/' . $author->foto));
            }

            $foto = $request->file('foto');
            $extension = $foto->extension();
            $fotoName = md5($foto->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $foto->move(public_path('img/authors'), $fotoName);
            $validated['foto'] = $fotoName;
        }

        // Atualizar data de modificação
        $validated['lastModifyedDate'] = now()->format('Y-m-d');

        // Atualizar o author
        $author->update($validated);

        return redirect()->route('admin.author.index')->with('msg', 'Author atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
        return redirect()->route('admin.authors.author.index')->with('msg', 'author editado com sucesso!');
    }
}
