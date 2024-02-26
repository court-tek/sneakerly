<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quienTuEres = auth()->user()->role_id;
        if ($quienTuEres == 2 || $quienTuEres == 1) {
            $articles = Article::paginate(5);
        } else {
            $articles = Article::where('user_id', auth()->user()->id)->paginate(5);
        }

        return view('admin/all', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Article::class);
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Article::class); 
        $article = new Article;

        // die(var_dump($article->user_id));
        $article->user_id = auth()->user()->id;
        $article->title = $request->title;
        $article->img_url = $request->img_url;
        $article->category_id = $request->category_id;
        $article->author = auth()->user()->name;
        $article->featured = $request->featured;
        $article->content = $request->content;
        $article->status = "draft";

        $article->save();

        session()->flash('success', 'Created New Article Successfully');

        return redirect('/admin/articles-all');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::where(['id' => $id])->first();
        $this->authorize('update', $article);
        return view('admin/edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::where(['id' => $id])->first();

        $this->authorize('update', $article);

        $article->title = $request->title;
        $article->img_url = $request->img_url;
        $article->category_id = $request->category_id;
        $article->author = $request->author;
        $article->featured = $request->featured;
        $article->content = $request->content;
        $article->status = $request->status;

        $article->save();

        session()->flash('success', 'Updated The Article Successfully');

        return redirect('/admin/articles-all');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);

        $this->authorize('delete', $article);
 
        $article->delete();

        session()->flash('success', 'Deleted The Article Successfully');

        return redirect('/admin/articles-all');
    }
}
