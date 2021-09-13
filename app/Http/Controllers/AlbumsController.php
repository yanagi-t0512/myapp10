<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index() {

        $albums = Album::get();

        return view('albums.index')->with('albums', $albums);
    }

    public function create() {
        return view('albums.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover-image' => 'required|image',
        ]);

        $filenameWithExtension = $request->file('cover-image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('cover-image')->getClientOriginalExtension();

        $filenameToStore = $filename . '_' . time() . '_' . $extension;

        $request->file('cover-image')->storeAs('public/album_covers', $filenameToStore);

        $album = new Album();
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;

        $album->save();

        return redirect('/albums')->with('success', 'アルバムの登録に成功しました。');
    }

    public function show($id) {
        $album = Album::with('photos')->find($id);

        return view('albums.show')->with('album', $album);
    }

}
