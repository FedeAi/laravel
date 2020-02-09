@extends('layout')

@section('banner')
<section id="banner">
    <div class="content">
        <header>
            <h1>Hi, I’m Federico Sarrocco<br />
            </h1>
            <p>this is a BLOG about my last projects</p>
        </header>
        <p>Studying Computer Science at Politecnico di Milano
        </p>
        <ul class="actions">
            <li><a href="#" class="button big">Learn More</a></li>
        </ul>
    </div>
    <span class="image object">
        <img src="images/fede_profile2.png" alt="" />
    </span>
</section>
@endsection

@section('content')
<!-- Section -->
<section>
    <header class="major">
        <h2>What do I do:</h2>
    </header>
    <div class="features">
        <article>
            <span class="image left"><img src="images/Dynamis_logo.png" alt="" /></span>
            <div class="content">
                <h3>Formula Student competitions</h3>
                <p>Formula SAE challenges students to conceive, design, fabricate, and compete with small formula-style racing cars.</p>
            </div>
        </article>
        <article>
            <span class="image left"><img src="images/Kaggle_logo.png" alt="" /></span>
            <div class="content">
                <h3>Machine learning competitions</h3>
                <p>Kaggle allows users to enter competitions to solve data science challenges.</p>
            </div>
        </article>
        <article>
            <a class="image left"><img src="images/Numerai_logo.png" alt="" /></a>
            <div class="content">
                <h3>Stock market Prediction</h3>
                <p>Using machine learning alghorithms to predict stock market movements</p>
            </div>
        </article>
        <article>
            <span class="image left"><img src="images/Polimi_logo.png" alt="" /></span>
            <div class="content">
                <h3>Computer Science Engineering Student</h3>
                
            </div>
        </article>
    </div>
</section>

<!-- Section -->
<section>
    <header class="major">
        <h2>Latest articles</h2>
    </header>
    <div class="posts">
        @forelse ($articles as $article)
        <article>
            <a href="{{ route('articles.show', $article)}}" class="image"><img src="images/pic01.jpg" alt="" /></a>
            <h3><a href="{{ route('articles.show', $article)}}"> {{$article->title}} </a></h3>
            <p>{!!$article->excerpt!!}</p>
            <ul class="actions">
                <li><a href="{{ route('articles.show', $article)}}" class="button">More</a></li>
            </ul>
        </article>

        @empty
        <p>No relevant articles yet</p>
        @endforelse
    </div>
</section>



@endsection