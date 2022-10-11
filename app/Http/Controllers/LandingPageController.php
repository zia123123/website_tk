<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Articles;
use App\Models\Gallery;
use App\Models\LandingPage;
use App\Models\Program;
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
        $data_program = Program::all();
        return view('/landingpage/landingpage', compact('data', 'data_about', 'data_program'));
    }
    public function programlanding()
    {
        $data_program = Program::all();
        return view('/programpage/programpage', compact('data_program'));
    }
    public function beritalanding()
    {
        return view('/beritapage/beritapage');
    }
    public function pendaftaranlanding()
    {
        return view('/pendaftaranpage/pendaftaranpage');
    }
    public function galerilanding()
    {
        $data_galeri = Gallery::all();
        return view('/galeripage/galeripage', compact('data_galeri'));
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
