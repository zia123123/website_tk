<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class DetailGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailgalerilanding($id)
    {
        $data_galeri = Gallery::find($id);
        return view('/detailgaleripage/detailgaleripage', compact('data_galeri'));
    }
}
