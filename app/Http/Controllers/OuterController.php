<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class OuterController extends Controller
{
    public function index()
    {   //by descending
        $articles = Articles::orderByDesc('id')->get();
        return view('home', [
            'title' => 'Seluruh Artikel',
            'articles' => $articles,
        ]);
    }
    public function article_detail($id)
    {
        Articles::find($id);
        return view('article', [
            'title' => 'Artikel' . $id,
            'article' => Articles::find($id),
        ]);
    }
}
