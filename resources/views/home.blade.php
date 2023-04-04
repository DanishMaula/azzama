@extends('layouts.app')
@section('link')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <section class="home hero">
        <div class="text-hero">
            <p class="name">AZZAMA</p>
            <p class="moto">COMFORT YOUR SYARI</p>
        </div>
    </section>
    <section class="shop">
        <div class="dress">
            <div class="container-dress">
                <p class="dress-produk">Dress</p>
                <a href="#" class="btn-dress">SHOP NOW</a>
            </div>

        </div>
        <div class="hijab">
            <div class="container-hijab">
                <p class="hijab-produk">Hijab</p>
                <a href="/hijab" class="btn-hijab">SHOP NOW</a>
            </div>
        </div>
    </section>
    <section class="article">
        <div class="content">
            <div class="header">
                <a href="">Azzama Articles</a>
            </div>
            <div class="articles">
                @foreach ($articles as $article)
                    <div class="article-item">
                        <a href="{{ route('article.detail', $article->id)}}"><img src="../images/main.png" alt=""></a>
                        <div class="article-title">
                            <p>{{ $article->title }}</p>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
@endsection
