<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Articles;
use App\Models\Gallery;
use App\Models\Kegiatan;
use App\Models\LandingPage;
use App\Models\Program;
use App\Models\Programpendaftaran;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Articles::paginate(3);
        $data_about = About::all();
        $data_program = Program::paginate(3);
        $data_visi = Visimisi::all();
        return view('/landingpage/landingpage', compact('data', 'data_about', 'data_program', 'data_visi'));
    }
    public function programlanding()
    {
        $data_program = Program::all();
        $data_about = About::all();
        return view('/programpage/programpage', compact('data_program', 'data_about'));
    }
    public function beritalanding()
    {
        $data_berita = Kegiatan::paginate(3);
        $data_about = About::all();
        return view('/beritapage/beritapage', compact('data_berita', 'data_about'));
    }
    public function pendaftaranlanding()
    {
        $data_pendaftaran = Programpendaftaran::all();
        $data_about = About::all();
        return view('/pendaftaranpage/pendaftaranpage', compact('data_pendaftaran', 'data_about'));
    }
    public function galerilanding()
    {
        $data_galeri = Gallery::all();
        $data_about = About::all();
        return view('/galeripage/galeripage', compact('data_galeri', 'data_about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function show(LandingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function edit(LandingPage $landingPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingPage $landingPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandingPage $landingPage)
    {
        //
    }
}
