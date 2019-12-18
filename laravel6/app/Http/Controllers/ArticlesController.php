<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
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
        $validatedAttribute = $this->validateArticle();
        
        Article::create($validatedAttribute);

        return redirect(route('articles.index'));
    }

    public function edit(Article $article){
        
        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Article $article){

        $article->update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }

    public function destroy(){

    }

    protected function validateArticle(){
        return request()->validate([
            'title' => ['required','min:3','max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
