<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();
        return view('articles.index', [
            'program' => $program
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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

          $program = new Program([
            'namaprogram' => $request->get('namaprogram'),
            'deskripsi'=> $request->get('deskripsi'),
            'filename' => $dist.$newName
          ]);
          $program->save();
        return redirect()->route('articles.index')
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
        $program = Program::find($id);
        if (!$program) return redirect()->route('articles.index')
            ->with('error_message', 'User dengan id '.$id.' tidak ditemukan');
        return view('articles.edit', [
            'program' => $program
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
          $program = Program::find($id);
          $program->judul = $request->get('namaprogram');
          $program->content = $request->get('deskripsi');
          $program->filename = $dist.$newName;
          $program->save();
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
        $program = Program::find($id);
        if ($id == $request->program()->id) return redirect()->route('articles.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($program) $program->delete();
        return redirect()->route('articles.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
