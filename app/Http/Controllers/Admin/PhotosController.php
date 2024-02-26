<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\User;
use App\Models\Article;
use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $allPhotos = Photo::all();
        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $request->file('image')->move(public_path('images'), $newName);
        

        $photo = new Photo;

        // die(var_dump($article->user_id));
        $photo->name = $newName;
        $photo->size = $size;
        $photo->user_id = auth()->user()->id;
        $photo->article_id = $id;
        $photo->featured = ($allPhotos->count() < 1) ? 1 : 0;
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
    public function featured(Request $request,string $id, string $photo_id)
    {
        $old_photo = Photo::where([
            'article_id' => $id,
            'featured' => 1
        ])->first();

        $old_photo->featured = 0;

        $old_photo->save();

        $new_photo = Photo::where([
            'article_id' => $id,
            'id' => $photo_id
        ])->first();

        $new_photo->featured = 1;

        $new_photo->save();

        session()->flash('success', 'This photo is now the featured');

        return redirect("/admin/photos/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, $photo_id)
    {
        $photo = Photo::find($photo_id);
        $allPhotos = Photo::all();

        // $this->authorize('delete', $article);
        if ($photo->featured == 1 && $allPhotos->count() > 1) {
            session()->flash('warning', 'You must choose another featured image before deleting');

            return redirect("/admin/photos/{$id}");
        } elseif ($photo->featured == 1 && $allPhotos->count() == 1) {
            $photo->delete();

            session()->flash('success', 'Deleted The Photo Successfully');
    
            return redirect("/admin/photos/{$id}");
        } else {
            $photo->delete();

            session()->flash('success', 'Deleted The Photo Successfully');
    
            return redirect("/admin/photos/{$id}");
        }
       
    }
}
