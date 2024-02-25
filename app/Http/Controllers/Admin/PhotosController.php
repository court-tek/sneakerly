<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\User;
use App\Models\Article;
use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $photos = Photo::where([
            'user_id' => auth()->user()->id,
            'article_id' => $id
        ])->paginate(5);
        
        if(!$photos->hasPages()) {
            return redirect("admin/photos-create/{$id}");
        }
        $article_id = $id;

        return view('admin/photos/index', [
            'photos' => $photos,
            'article_id' => $article_id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id) 
    {
        $photo = $id;
        return view('admin/photos/create', ['id' => $photo]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $id;
        // $this->authorize('create', Photo:class); 

        $request()->validate([
            'image' => 'required|file|mimes:jpg,avif,png,webp'
        ]);
        $photo = new Photo;

        // die(var_dump($article->user_id));
        $photo->user_id = auth()->user()->id;
        $photo->article_id = $id;

        return view('admin/photos/create', [
            'id' => "$id"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
