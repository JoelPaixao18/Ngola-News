<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Category;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $publications = Publication::all();
        return view('_admin.publications.publication.index', compact('publications', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('_admin.publications.publicationCreate.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'cover.required' => 'A capa é obrigatória.',
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
        Event::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'status' => $request->status,
            'image' => $imageName,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
            'location' => $request->location,
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Evento criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Evento!');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
