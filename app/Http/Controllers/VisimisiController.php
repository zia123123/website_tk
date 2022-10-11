<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = Visimisi::all();
        return view('visimisi.index', [
            'visimisi' => $visimisi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visimisi.create');
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
          
          ]);
       

          $visimisi = new Visimisi([
            'judul' => $request->get('judul'),
            'content'=> $request->get('content'),
        
          ]);
          $visimisi->save();
        return redirect()->route('visimisi.index')
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
        $visimisi = Visimisi::find($id);
        if (!$visimisi) return redirect()->route('visimisi.index')
            ->with('error_message', 'User dengan id '.$id.' tidak ditemukan');
        return view('visimisi.edit', [
            'visimisi' => $visimisi
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

          $visimisi = Visimisi::find($id);
          $visimisi->judul = $request->get('judul');
          $visimisi->content = $request->get('content');
          $visimisi->save();
        return redirect()->route('visimisi.index')
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
        $visimisi = Visimisi::find($id);
        $visimisi->delete();
        return redirect()->route('visimisi.index')
            ->with('success_message', 'Berhasil menghapus Data');
    }
}
