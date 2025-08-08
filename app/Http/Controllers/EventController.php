<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Category;

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
        $events = Event::all();
        return view('admin.events.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories1 = Category::where('type', 'evento')->get();
        $categories2 = Category::where('type', 'eventos')->get();
        $categories = $categories1->merge($categories2);
       
        return view('admin.events.eventCreate.index', compact('categories'));
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
            'status' => 'required|boolean',
            'eventDate' => 'required|date|after_or_equal:today',
            'lastModifyedDate' => 'required|date|after_or_equal:eventDate',
            'categoryId' => 'required|exists:categories,id',
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
            'lastModifyedDate' => $request->lastModifyedDate,
            'categoryId' => $request->categoryId,
        ]);

        return redirect()->route('admin.event.index')->with('msg', 'Evento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
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
        return view('admin.events.eventEdit.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
