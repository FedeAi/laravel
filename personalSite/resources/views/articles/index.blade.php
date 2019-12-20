@extends('layout')

@section('content')
<!-- Section -->
<section>
    <header class="main">
        <h1>Posts</h1>
    </header>
    
    <h2 id="content">Latest</h2>
    
    <div class="features">
        @forelse ($articles as $article)
        <article>
            <div class="content">
                <h3><a href="{{ route('articles.show', $article)}}"> {{$article->title}} </a></h3>
                <p>{{$article->excerpt}}</p>
            </div>
        </article>
        @empty
            <p>No relevant articles yet</p>
        @endforelse
    </div>
</section>

@endsection