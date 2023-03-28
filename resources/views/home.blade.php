@extends('layouts.app')

@section('link')

<link rel="stylesheet" href="css/style.css">

@endsection

@section('swipper')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
        <div class="text-article">
            <p class="judul-article">AZZAMA ARTICLE</p>
            <a href=" {{ route('article')}}" class="discover">Discover More</a>
        </div>

        <div class="swiper mySwiper">
            {{-- <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/main1.jpg" alt="">
                        <div class="caption">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere incidunt quasi? Eveniet quo magnam excepturi, ea maxime dolore nemo!</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main1.jpg" alt="">
                        <div class="caption"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main1.jpg" alt="">
                        <div class="caption">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main1.jpg" alt="">
                        <div class="caption"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main1.jpg" alt="">
                        <div class="caption"></div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/main1.jpg" alt="">
                        <div class="caption"></div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

@endsection
