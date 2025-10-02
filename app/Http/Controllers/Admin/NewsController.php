<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;
use App\Mail\HighlightNewsNotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('id')->get();
        return view('_admin.news.list.index', compact('news'));
    }

    public function create()
    {
        //trazendo as categorias
        $categories = Category::all();
        $tags = Tag::all();
        $users = User::all(); // ou request()->user();
        return view('_admin.news.create.index', compact('categories', 'tags', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:10000',
            'status' => 'nullable|in:rascunho,publicado,arquivado',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'date' => 'required|date|after_or_equal:today',
            'detach' => 'nullable|in:normal,destaque,premium',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id'
        ]);

        $data = $request->except('_token');

        // Upload da imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/news'), $imageName);
            $data['image'] = $imageName;
        }

        $news = News::create($data);

        // Tags
        $news->tags()->sync($request->tags ?? []);

        // Enviar notificação se for destaque e publicado
        if ($news->status === 'publicado' && $news->detach === 'destaque') {
            $subscribers = Subscription::all();
            foreach ($subscribers as $subscriber) {
                try {
                    //code...
                    Mail::to($subscriber->email)->queue(new HighlightNewsNotificationMail($news));
                } catch (\Exception $e) {
                    //throw $th;
                    Log::error('Erro ao enviar email' . $e->getMessage());
                }
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'Notícia criada com sucesso!');
    }


    public function show(News $news)
    {
        return view('_admin.news.details.index', ['news' => $news]);
    }

    public function edit(News $news)
    {
        $categories = Category::all(); // Or any other query to fetch categories
        $tags = Tag::all();
        $users = User::all(); // ou request()->user();

        return view('_admin.news.edit.index', ['news' => $news], compact('categories', 'tags', 'users'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:10000',
            'status' => 'nullable|in:rascunho,publicado,arquivado',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date|after_or_equal:today',
            'detach' => 'nullable|in:normal,destaque,premium',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id'
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

        // Processar imagem se for enviada
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remover imagem antiga se existir
            if ($news->image && file_exists(public_path('img/news/' . $news->image))) {
                unlink(public_path('img/news/' . $news->image));
            }

            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/news'), $imageName);
            $data['image'] = $imageName;
        }

        // Atualiza todos os campos
        $news->update($data);

        // Tags
        if ($request->has('tags')) {
            $news->tags()->sync($request->tags);
        } else {
            $news->tags()->sync([]);
        }

        //  Enviar notificação se agora for destaque e publicado
        if ($news->status === 'publicado' && $news->detach === 'destaque') {
            $subscribers = Subscription::all();
            foreach ($subscribers as $subscriber) {
                try {
                    //code...
                    Mail::to($subscriber->email)->queue(new HighlightNewsNotificationMail($news));
                } catch (\Exception $e) {
                    //throw $th;
                    Log::error('Erro ao enviar email' . $e->getMessage());
                }
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'Notícia atualizada com sucesso!');
    }


    public function destroy(News $news)
    {
        $user = Auth::user(); // ou request()->user();
        if (!$user->isEditor()) {
            abort(403, 'Você não tem permissão para deletar esta notícia.');
        }
        $news->delete();
        return redirect()->route('admin.news.index')
            ->with('success', 'Notícia eliminado com sucesso');
    }
}
