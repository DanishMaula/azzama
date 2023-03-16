@extends('layouts.app')

@section('link')

    <link rel="stylesheet" href="style.css">

@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body>
    <section class="home hero">
        <div class="text-hero">
            <p class="name">AZZAMA</p>
            <p class="moto">COMFORT YOUR SYARI</p>
        </div>
    </section>
    <section class="shop">
        <div class="dress">
            <p class="dress-produk">Dress</p>
            <a href="#" class="btn-dress">SHOP NOW</a>
        </div>
        <div class="hijab">
            <p class="hijab-produk">Hijab</p>
            <a href="#" class="btn-hijab">SHOP NOW</a>
        </div>
    </section>
    <section class="article">
        <div class="text-article">
            <h3 class="judul-article">AZZAMA ARTICLE</h3>
            <a href="#" class="discover">Discover More</a>
        </div>

        <div class="swipper-article">
            
        </div>
    </section>
    

    <!--- JS --->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
@endsection
