<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan.index', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
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
            'content'=> 'required',
            'filename' => 'required'
          ]);
          $filename = $request->file('filename');
          $name = $filename->getClientOriginalName();
          $dist = 'uploads/';
          $nameExp = explode('.', $name);
          $nameActExp = strtolower(end($nameExp));
          $newName = uniqid('', true).'.'.$nameActExp;
          $upload = $filename->move($dist, $newName);

          $kegiatan = new Kegiatan([
            'judul' => $request->get('judul'),
            'content'=> $request->get('content'),
            'filename' => $dist.$newName
          ]);
          $kegiatan->save();
        return redirect()->route('kegiatan.index')
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
        $kegiatan = Kegiatan::find($id);
        if (!$kegiatan) return redirect()->route('kegiatan.index')
            ->with('error_message', 'Kegiatan dengan id '.$id.' tidak ditemukan');
        return view('kegiatan.edit', [
            'kegiatan' => $kegiatan
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
            'judul'=>'required',
            'content'=> 'required',
          ]);

        $filename = $request->file('filename');
        $name = $filename->getClientOriginalName();
        $dist = 'uploads/';
        $nameExp = explode('.', $name);
        $nameActExp = strtolower(end($nameExp));
        $newName = uniqid('', true).'.'.$nameActExp;
        $upload = $filename->move($dist, $newName);
          $kegiatan = Kegiatan::find($id);
          $kegiatan->judul = $request->get('judul');
          $kegiatan->content = $request->get('content');
          $kegiatan->filename = $dist.$newName;
          $kegiatan->save();
        return redirect()->route('kegiatan.index')
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
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
