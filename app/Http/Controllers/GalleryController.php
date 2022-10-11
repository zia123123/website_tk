<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'filename' => 'required'
          ]);
          $filename = $request->file('filename');
          $name = $filename->getClientOriginalName();
          $dist = 'uploads/';
          $nameExp = explode('.', $name);
          $nameActExp = strtolower(end($nameExp));
          $newName = uniqid('', true).'.'.$nameActExp;
          $upload = $filename->move($dist, $newName);

          $gallery = new Gallery([
            'judul' => $request->get('judul'),
            'filename' => $dist.$newName
          ]);
          $gallery->save();
        return redirect()->route('gallery.index')
            ->with('success_message', 'Berhasil menambah Data baru');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery) return redirect()->route('gallery.index')
            ->with('error_message', 'Data dengan id '.$id.' tidak ditemukan');
        return view('gallery.edit', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaprogram'=>'required',
            'deskripsi'=> 'required',
            'filename' => 'required'
          ]);

        $filename = $request->file('filename');
        $name = $filename->getClientOriginalName();
        $dist = 'uploads/';
        $nameExp = explode('.', $name);
        $nameActExp = strtolower(end($nameExp));
        $newName = uniqid('', true).'.'.$nameActExp;
        $upload = $filename->move($dist, $newName);
          $gallery = Gallery::find($id);
          $gallery->namaprogram = $request->get('judul');
          $gallery->filename = $dist.$newName;
          $gallery->save();
        return redirect()->route('gallery.index')
            ->with('success_message', 'Berhasil mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('gallery.index')
            ->with('success_message', 'Berhasil menghapus Data');
    }
}
