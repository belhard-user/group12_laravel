<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest('updated_at')->paginate(5);
        
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // $article = Article::where('slug', $slug)->first();
        return view('article.show', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        Article::create($request->except('_token'));

        return redirect()->route('article.index');
    }

    public function update(Article $article, Request $request)
    {
        $article->update($request->all());

        return redirect()->route('article.index');
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }
}
