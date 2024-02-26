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

        return view('front/index', [
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
