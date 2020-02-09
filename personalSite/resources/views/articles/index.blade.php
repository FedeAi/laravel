@extends('layout')

@section('content')
<!-- Section -->
<section>
    <header class="main">
        
        <h1>Posts</h1>
        <h2>@isset($tag)
            [{{$tag}}]
             @endisset</h2>
    </header>

    <h2 id="content">Latest</h2>

    <div class="features">
        @forelse ($articles as $article)
        
        <article>
            <div class="content">
                <span class="image fit"><img src="images/pic01.jpg" alt="" /></span>
                <h3><a href="{{ route('articles.show', $article)}}"> {{$article->title}} </a></h3>
                <p>{!!$article->excerpt!!}</p>
            </div>
        </article>
        @empty
        <p>No relevant articles yet</p>
        @endforelse
    </div>
</section>

@endsection