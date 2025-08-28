<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::all();
        return view('_admin.galeries.galery.index', compact('galeries'));
    }
    public function create()
    {
        return view('_admin.galeries.galeryCreate.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:2048',
        ], [
            'title.required' => 'O título é obrigatório.',
            'image.required' => 'A imagem é obrigatória.',
            'image.image' => 'O arquivo deve ser uma imagem válida.',
            'image.max' => 'A imagem não pode ser maior que 2MB.',
        ]);
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/galeries'), $imageName);
        }
        Galery::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imageName,
        ]);
        return redirect()->route('admin.galery.index')->with('success', 'Galeria criada com sucesso.');
    }
    public function show(Galery $galery)
    {
        return view('_admin.galeries.galery.show', compact('galery'));
    }
    public function edit(Galery $galery)
    {
        return view('_admin.galeries.galery.edit', compact('galery'));
    }
    public function update(Request $request, Galery $galery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ], [
            'title.required' => 'O título é obrigatório.',
            'image.image' => 'O arquivo deve ser uma imagem válida.',
            'image.max' => 'A imagem não pode ser maior que 2MB.',
        ]);
        // Upload da imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/galeries'), $imageName);
            // Deleta a imagem antiga se existir
            if ($galery->image && file_exists(public_path('img/galeries/' . $galery->image))) {
                unlink(public_path('img/galeries/' . $galery->image));
            }
            $galery->image = $imageName;
        }
        $galery->save();
        return redirect()->route('admin.galery.index')->with('success', 'Galeria atualizada com sucesso.');
    }
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect()->route('admin.galery.index')->with('success', 'Galeria removida com sucesso.');
    }
}
