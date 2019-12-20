@extends('layout')

@section('content')
<section>
    <header class="main">
        <h1>{{$article->title}}</h1>
    </header>

    <span class="image main"><img src="/images/pic11.jpg" alt="" /></span>

    <p>{{$article->body}}</p>
    <hr class="major" />

    @foreach ($article->tags as $tag)
    <a href="{{route('articles.index',['tag'=>$tag->name])}}">{{ $tag->name}}</a>
    @endforeach
</section>

@endsection