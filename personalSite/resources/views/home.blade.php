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
        <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
        <article>
            <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
            <h3>Interdum aenean</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
            <h3>Nulla amet dolore</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
            <h3>Tempus ullamcorper</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
            <h3>Sed etiam facilis</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
            <h3>Feugiat lorem aenean</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
            <h3>Amet varius aliquam</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
    </div>
</section>



@endsection