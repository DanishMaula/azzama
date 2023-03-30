@extends('layouts.app')

@section('content')
    <div style="min-height: 200vh;  text-center">
        <div class="text-article">
            <p>
                <center class="title-article-detail">{{ $detail->title }}</center>
            </p>
        </div>
        <div class="row justify-content-center">
            <img src="https://images.unsplash.com/photo-1547891654-e66ed7ebb968?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                alt="photo-article" class=" img-article-detail">

            <p class="content-article">{{ $detail->content }}</p>
        </div>


    </div>
@endsection
