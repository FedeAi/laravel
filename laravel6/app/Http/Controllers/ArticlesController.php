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

    } 
    
    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
