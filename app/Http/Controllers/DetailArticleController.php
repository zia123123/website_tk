<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class DetailArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailarticlelanding($id)
    {
        $data_article = Articles::find($id);
        return view('/detailarticlepage/detailarticlepage', compact('data_article'));
    }
}
