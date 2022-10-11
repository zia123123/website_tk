<?php

namespace App\Http\Controllers;

use App\Models\Programpendaftaran;
use Illuminate\Http\Request;

class ProgrampendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programpendaftaran = Programpendaftaran::all();
        return view('programpendaftaran.index', [
            'programpendaftaran' => $programpendaftaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programpendaftaran.create');
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
            'filename' => 'required',
            'link' =>'required',
          ]);
          $filename = $request->file('filename');
          $name = $filename->getClientOriginalName();
          $dist = 'uploads/';
          $nameExp = explode('.', $name);
          $nameActExp = strtolower(end($nameExp));
          $newName = uniqid('', true).'.'.$nameActExp;
          $upload = $filename->move($dist, $newName);

          $programpendaftaran = new Programpendaftaran([
            'judul' => $request->get('judul'),
            'content'=> $request->get('content'),
            'link'=> $request->get('link'),
            'filename' => $dist.$newName
          ]);
          $programpendaftaran->save();
        return redirect()->route('programpendaftaran.index')
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
        $programpendaftaran = Programpendaftaran::find($id);
        if (!$programpendaftaran) return redirect()->route('programpendaftaran.index')
            ->with('error_message', 'User dengan id '.$id.' tidak ditemukan');
        return view('programpendaftaran.edit', [
            'programpendaftaran' => $programpendaftaran
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
            'filename' => 'required',
            'link' => 'required',
          ]);

        $filename = $request->file('filename');
        $name = $filename->getClientOriginalName();
        $dist = 'uploads/';
        $nameExp = explode('.', $name);
        $nameActExp = strtolower(end($nameExp));
        $newName = uniqid('', true).'.'.$nameActExp;
        $upload = $filename->move($dist, $newName);
          $programpendaftaran = Programpendaftaran::find($id);
          $programpendaftaran->judul = $request->get('judul');
          $programpendaftaran->content = $request->get('content');
          $programpendaftaran->link = $request->get('link');
          $programpendaftaran->filename = $dist.$newName;
          $programpendaftaran->save();
        return redirect()->route('articles.index')
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
        $programpendaftaran = Programpendaftaran::find($id);
        $programpendaftaran->delete();
        return redirect()->route('programpendaftaran.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
