@extends('layouts.app')

@section('dress')
<link rel="stylesheet" href="css/dress.css">
@endsection

@section('content')
<div style="min-width: 100vw;">
    <div class="hero">
        <div class="container-fluid text d-flex bg-transparent align-items-center justify-content-center">
            <p class="bg-transparent">Dress</p>
        </div>
    </div>

    <section class="catalog p-4 d-flex flex-column">
        <div class="container-fluid text-center justify-content-start">
            <div class="row gap-3 brand-catalog">
                <div class="row catalog-item">
                    @foreach ($dress as $row )
                    <div class="col-md-3 ">
                        <img src="https://images.unsplash.com/photo-1552874869-5c39ec9288dc?ixlib=rb-4.0.3& ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGhpamFiJTIwbW9kZWx8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"
                            alt="">
                        <div class="nama-produk d-flex flex-column justify-content-center p-3">
                            <a href="#" value= {{ $row->barang }} class="nama-barang">{{ $row->barang }}</a>
                            <p value= {{ $row->harga }} class="harga-barang">{{ $row->harga }}</p>

                        </div>
                    </div>
                    @endforeach
                </div>

            </div>


        </div>
    </section>
</div>

@endsection