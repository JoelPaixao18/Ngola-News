<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::orderByDesc('id')->get();
        return view('_admin.events.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //trazendo as categorias
        $categories1 = Category::where('type', 'evento')->get();
        $categories2 = Category::where('type', 'eventos')->get();
        $categories = $categories1->merge($categories2);
        //trazendo os autores
        $authors = Author::all();

        return view('_admin.events.eventCreate.index', compact('categories', 'authors'));
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
            'title' => 'required|string|max:100',
            'subtitle' => 'required|string|max:100',
            'description' => 'required|string',
            'country' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'status' => 'required|boolean ',
            'eventDate' => 'required|date|after_or_equal:today',
            'categoryId' => 'required|exists:categories,id',
            'authorId' => 'required|exists:authors,id',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/events'), $imageName);
        }

        // Criação do evento
        Event::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $imageName,
            'description' => $request->description,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'status' => $request->status,
            'eventDate' => $request->eventDate,
            'lastModifyedDate' => now()->format('Y-m-d'),
            'categoryId' => $request->categoryId,
            'authorId' => $request->authorId,
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'description.required' => 'A descrição é obrigatória.',
            'country.required' => 'O país é obrigatório.',
            'state.required' => 'O estado é obrigatório.',
            'city.required' => 'A cidade é obrigatória.',
            'status.required' => 'O status é obrigatório.',
            'eventDate.required' => 'A data do evento é obrigatória.',
            'eventDate.after_or_equal' => 'A data do evento deve ser hoje ou uma data futura.',
            'categoryId.required' => 'A categoria é obrigatória.',
            'authorId.required' => 'O autor é obrigatório.',
            'image.required' => 'A imagem é obrigatória.',
            'image.image' => 'A imagem deve ser um arquivo de imagem válido.',
            'image.mimes' => 'A imagem deve ser do tipo: jpg, jpeg, png.',
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Evento criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Evento!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
<<<<<<< HEAD
        //
        return view('_admin.events.eventView.index', ['event' => $event]);
=======
        // 
        $event = Event::with('author', 'category')->find($event->id);
        return view('admin.events.eventView.index', ['event' => $event]);
>>>>>>> cb278ea561256b6853e18916fc50acdf97a9f65d
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        $categories = Category::all();
        $authors = Author::all();
        return view('_admin.events.eventEdit.index', ['event' => $event], compact('categories', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // Validação
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'subtitle' => 'required|string|max:100',
            'authorId' => 'required|exists:authors,id',
            'description' => 'required|string',
            'country' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'status' => 'required|string',
            'eventDate' => 'required|date|after_or_equal:today',
            'categoryId' => 'required|exists:categories,id',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png', // Alterado para 'sometimes'
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'authorId.required' => 'O autor é obrigatório.',
            'description.required' => 'A descrição é obrigatória.',
            'country.required' => 'O país é obrigatório.',
            'state.required' => 'O estado é obrigatório.',
            'city.required' => 'A cidade é obrigatória.',
            'status.required' => 'O status é obrigatório.',
            'eventDate.required' => 'A data do evento é obrigatória.',
            'eventDate.after_or_equal' => 'A data do evento deve ser hoje ou uma data futura.',
            'categoryId.required' => 'A categoria é obrigatória.',
            'image.image' => 'A imagem deve ser um arquivo de imagem válido.',
            'image.mimes' => 'A imagem deve ser do tipo: jpg, jpeg, png.',
            'image.sometimes' => 'A imagem é opcional, mas se fornecida, deve ser uma imagem válida.',
        ]);

        // Processar imagem se for enviada
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remover imagem antiga se existir
            if ($event->image && file_exists(public_path('img/events/' . $event->image))) {
                unlink(public_path('img/events/' . $event->image));
            }

            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/events'), $imageName);
            $validated['image'] = $imageName;
        }

        // Atualizar data de modificação
        $validated['lastModifyedDate'] = now()->format('Y-m-d');

        // Atualizar o evento
        $event->update($validated);

        return redirect()->route('admin.event.index')->with('success', 'Evento atualizado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar o evento!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.event.index')->with('msg', 'Envento apagado com sucesso!');
    }
}
