@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @foreach ($articles as $article)
            
            <div id="content">
                <div class="title">
                <h1><a href="{{ route('articles.show', $article)}}"> {{$article->title}} </a></h1>
                </div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <p>{{$article->excerpt}} </p>
                
            </div>
           
        @endforeach
    </div>
</div>
@endsection