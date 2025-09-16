<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::orderByDesc('id')->get();
        return view('_admin.comments.list.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $comment = new Comment();
        $news = News::all(); // Busca todas as notícias cadastradas
        $users = User::all();
        return view('_admin.comments.create.index', compact('comment', 'news', 'users'));
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
            'text_comment' => 'required|string|max:1000',
            'date' => 'required|date|after_or_equal:today',
            'news_id' => 'required|exists:news,id',
            'user_id' => 'required|exists:users,id',
            'parent_id' => 'nullable|exists:comments,id',
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'news_id.exists' => 'A notícia selecionada não existe.',
            'user_id.exists' => 'O usuário selecionado não existe.',
        ]);

        Comment::create([
            'text_comment' => $request->text_comment,
            'date' => $request->date,
            'news_id' => $request->news_id,
            'user_id' => $request->user_id,
            'parent_id' => $request->parent_id,
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'news_id.exists' => 'A notícia selecionada não existe.',
            'user_id.exists' => 'O usuário selecionado não existe.',
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Comentário criado com sucesso.');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Comentário!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
        return view('_admin.comments.details.index', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $comment = Comment::findOrFail($comment->id);
        $news = News::all();
        $users = User::all();
        return view('_admin.comments.edit.index', compact('comment', 'news', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
        $request->validate([
            'text_comment' => 'required|string|max:1000',
            'date' => 'required|date|after_or_equal:today',
            'news_id' => 'required|exists:news,id',
            'user_id' => 'required|exists:users,id',
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'news_id.exists' => 'A notícia selecionada não existe.',
            'user_id.exists' => 'O usuário selecionado não existe.',
        ]);

        $comment->update([
            'text_comment' => $request->input('text_comment'),
            'date' => $request->date,
            'news_id' => $request->news_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Comentário atualizado com sucesso.');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Comentário!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
        $comment->delete();

        return redirect()->route('admin.comments.index')->with('success', 'Comentário excluído com sucesso.');
    }
}
