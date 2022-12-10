<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', [
            'kelas' => $kelas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
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
            'persyaratan'=>'required',
            'umur'=>'required',
            'rasio'=>'required',
            'waktu'=>'required',
            'hari'=>'required',
            'filename' => 'required'
          ]);
          $filename = $request->file('filename');
          $name = $filename->getClientOriginalName();
          $dist = 'uploads/';
          $nameExp = explode('.', $name);
          $nameActExp = strtolower(end($nameExp));
          $newName = uniqid('', true).'.'.$nameActExp;
          $upload = $filename->move($dist, $newName);

          $kelas = new Kelas([
            'judul'=> $request->get('judul'),
            'persyaratan'=> $request->get('persyaratan'),
            'umur'=> $request->get('umur'),
            'rasio'=> $request->get('rasio'),
            'waktu'=> $request->get('waktu'),
            'hari'=> $request->get('hari'),
            'filename' => $dist.$newName
          ]);
          $kelas->save();
        return redirect()->route('kelas.index')
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
        $kelas = Kelas::find($id);
        if (!$kelas) return redirect()->route('kelas.index')
            ->with('error_message', 'Kelas dengan id '.$id.' tidak ditemukan');
        return view('kelas.edit', [
            'kelas' => $kelas
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
            'persyaratan'=>'required',
            'umur'=>'required',
            'rasio'=>'required',
            'waktu'=>'required',
            'hari'=>'required',
            'filename' => 'required'
          ]);

        $filename = $request->file('filename');
        $name = $filename->getClientOriginalName();
        $dist = 'uploads/';
        $nameExp = explode('.', $name);
        $nameActExp = strtolower(end($nameExp));
        $newName = uniqid('', true).'.'.$nameActExp;
        $upload = $filename->move($dist, $newName);
          $kelas = Kelas::find($id);
          $kelas->judul = $request->get('judul');
          $kelas->persyaratan = $request->get('persyaratan');
          $kelas->umur = $request->get('umur');
          $kelas->rasio =$request->get('rasio');
          $kelas->waktu = $request->get('waktu');
          $kelas->hari = $request->get('hari');
          $kelas->filename = $dist.$newName;
          $kelas->save();
        return redirect()->route('kelas.index')
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
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->route('kelas.index')
            ->with('success_message', 'Berhasil menghapus kelas');
    }
}
