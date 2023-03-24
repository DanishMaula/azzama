@extends('layouts.app')
@section('link')
<link rel="stylesheet" href="css/home.css">
@endsection
@section('swipper')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endsection

@section('content')
<section class="hero">
    <div class="text-hero">
        <p class="name">AZZAMA</p>
        <p class="moto">COMFORT YOUR SYARI</p>
    </div>
</section>
<section class="shop">
    <div class="item dress">
        <div class="container dress">
            <p class="text-produk">Dress</p>
            <a href="#" class="btn-dress">SHOP NOW</a>
        </div>
    </div>
    <div class="item hijab">
        <div class="container hijab">
            <p class="text-produk">Hijab</p>
            <a href="#" class="btn-hijab">SHOP NOW</a>
        </div>
    </div>
</section>

<section class="article">
    <div class="content">
    <div class="article-text">
        <p class="title">Azzama article</p>
        <a href="">Discover more</a>
    </div>
    </div>
</section>
@endsection
