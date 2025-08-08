<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        //$categories = Category::all();
        return view('admin.categories.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.categoryCreate.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'type' => 'required|string|max:50',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'slug.required' => 'O Slug é obrigátorio.',
            'slug.unique' => 'O Slug deve ser unico.',
            'type.required' => 'O tipo é obrigátorio.',
            'status.required' => 'Obrigátorio seleciona um status.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'type' => $request->type,
            'status' => $request->status === 'active' ? 'active' : 'inactive',
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //

        return view('admin.categories.categoryView.index', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('admin.categories.categoryEdit.index', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,
            'type' => 'required|string|max:50',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'slug.required' => 'O Slug é obrigátorio.',
            'slug.unique' => 'O Slug deve ser unico.',
            'type.required' => 'O tipo é obrigátorio.',
            'status.required' => 'Obrigátorio seleciona um status.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'type' => $request->type,
            'status' => $request->status === 'active' ? 'active' : 'inactive',
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Categoria apagado com sucesso!');
    }
}
