<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = \DB::table('articles')
            ->latest('updated_at')
            ->paginate(5);
        
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = \DB::table('articles')
            ->where('slug', $slug)
            ->first()
        ;
        
        return view('article.show', compact('article'));
    }
}
