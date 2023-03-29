@extends('layouts.app')
@section('link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

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
            <a href="#" class="btn-hijab">SHOP NOW</a>
        </div>
    </div>
</section>
<section class="article">
    <div class="content">
        <div class="header">
            <a href="">Azzama Articles</a>
        </div>
        <div class="articles">
            <div class="article-item">
                <a href=""><img src="../images/main.png" alt=""></a>
                <div class="article-title">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="article-item">
                <a href=""><img src="../images/main.png" alt=""></a>
                <div class="article-title">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="article-item">
                <a href=""><img src="../images/main.png" alt=""></a>
                <div class="article-title">
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
