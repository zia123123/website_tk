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
        $programs = Program::all();
        return view('program.index', [
            'programs' => $programs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.create');
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

          $programs = new Program([
            'namaprogram' => $request->get('namaprogram'),
            'deskripsi'=> $request->get('deskripsi'),
            'filename' => $dist.$newName
          ]);
          $programs->save();
        return redirect()->route('programs.index')
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
        $programs = Program::find($id);
        if (!$programs) return redirect()->route('program.index')
            ->with('error_message', 'Data dengan id '.$id.' tidak ditemukan');
        return view('program.edit', [
            'programs' => $programs
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
          $programs = Program::find($id);
          $programs->namaprogram = $request->get('namaprogram');
          $programs->deskripsi = $request->get('deskripsi');
          $programs->filename = $dist.$newName;
          $programs->save();
        return redirect()->route('programs.index')
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
        $programs = Program::find($id);
        $programs->delete();
        return redirect()->route('programs.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
