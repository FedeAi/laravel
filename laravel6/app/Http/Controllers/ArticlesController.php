<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show',['article' => $article]);
    }

    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index',['articles' => $articles]);
    }

    public function create(){
        return view('articles.create');
    } 
    
    public function store(){
        // validation
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit($id){
        $article = Article::find($id);

        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update($id){
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy(){

    }
}
