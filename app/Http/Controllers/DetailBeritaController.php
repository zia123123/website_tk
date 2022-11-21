<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class DetailBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailberitapage($id)
    {
        $data_berita = Kegiatan::find($id);
        return view('/detailberitapage/detailberitapage', compact('data_berita'));
    }
}
