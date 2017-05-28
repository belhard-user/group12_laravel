<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $articles = Article::with('tags')->latest('updated_at')->paginate(5);
        
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

    public function store(ArticleRequest $request)
    {
        $article = \Auth::user()->attachNews($request);
        $article->tags()->attach($request->get('tag_list'));

        return redirect()->route('article.index');
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        $article->tags()->sync($request->get('tag_list'));
        /*$article->tags()->detach($request->get('tag_list'));
        $article->tags()->attach($request->get('tag_list'));*/

        return redirect()->route('article.index');
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }
}
