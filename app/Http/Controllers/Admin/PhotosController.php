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
        
        if($photos->total() < 1) {
            return redirect("admin/photos-create/{$id}");
        }

        return view('admin/photos/index', [
            'photos' => $photos,
            'id' => $id
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
    public function store(Request $request, $id)
    {
        // $this->authorize('create', Photo:class); 

        request()->validate([
            'image' => 'required|file|mimes:jpg,avif,png,webp'
        ]);

        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $request->file('image')->move(public_path('images'), $newName);
        $photo = new Photo;

        // die(var_dump($article->user_id));
        $photo->name = $newName;
        $photo->size = $size;
        $photo->user_id = auth()->user()->id;
        $photo->article_id = $id;
        $photo->featured = 0;
        $photo->save();

        return redirect("admin/photos/{$id}");
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
    public function destroy(string $id, $photo_id)
    {
        $photo = Photo::find($photo_id);

        // $this->authorize('delete', $article);
 
        $photo->delete();

        session()->flash('success', 'Deleted The Photo Successfully');

        return redirect("/admin/photos/{$id}");
    }
}
