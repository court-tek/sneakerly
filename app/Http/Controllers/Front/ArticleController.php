<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $paginated = Article::paginate(5);

        return view('front/index', [
            'articles' => $articles,
            'paginated' => $paginated
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function fashion()
    {
        $articles = Article::all();

        return view('front/fashion', [
            'articles' => $articles
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function footwear()
    {
        $articles = Article::all();

        return view('front/footwear', [
            'articles' => $articles
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function art()
    {
        $articles = Article::all();

        return view('front/art', [
            'articles' => $articles
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function design()
    {
        $articles = Article::all();

        return view('front/design', [
            'articles' => $articles
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        
        return view('front/show', [
            'article' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
