@extends('layouts.app')

@section('content')
    <div style="min-height: 100vh;" class="">
        <div class="text-article">
            <p>
                <center class="text-articles">Azzama Article</center>
            </p>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            @foreach ($article as $articleData)
                                <div class="col-lg-4 list-article">
                                    <a href="{{ route('article.detail', $articleData->id)}}">
                                        <div class="container justify-content-start">
                                            <img src="{{ asset('img/avatar.jpeg') }}" alt="img" class="img-article">
                                            <br></br>
                                            <div class="container">
                                                <p class="title-article">{{ $articleData->title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                

            </div>
        </div>
    </div>
    @endsection
