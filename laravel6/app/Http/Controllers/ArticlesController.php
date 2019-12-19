<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        return view('articles.show',['article' => $article]);
    }

    public function index()
    {
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }else{
            $articles = Article::latest()->get();
        }

        return view('articles.index',['articles' => $articles]);
    }

    public function create(){
        $tags = Tag::all();
        return view('articles.create',[
            'tags'=>$tags
        ]);
    } 
    
    public function store(){
        // validation
        $this->validateArticle();

        $article = new Article(request(['title','excerpt','body']));
        $article->user_id = 2;
        $article->save();

        $article->tags()->attach(request('tags'));
        
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
            'body' => 'required',
            'tags'=>'exists:tags,id'
        ]);
    }
}
